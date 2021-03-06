SELECT t.Login,
round(sum(t.totalprofit*if(isnull(s.Mid),1,s.mid)),2) as Total_Profit_USD
FROM fxbackoffice.mt4_trades t
join fxbackoffice.mt4_users u on t.login = u.login
left join (SELECT symbol,(ask+bid)/2 mid FROM fxbackoffice.mt4_prices where right(symbol,1)='q' and (symbol='eurusdq' or symbol='gbpusdq')) s on left(s.symbol,3) = left(u.currency,3)

where t.login > '200000' and t.cmd < 2 and t.OPEN_TIME<curdate() and (t.CLOSE_TIME >=curdate()  or t.CLOSE_TIME<'2000') and t.totalProfit<0
and u.group not regexp 'sub|demo|test|mam' 
group by t.Login
order by total_profit_usd asc
limit 10