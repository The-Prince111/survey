use test_db

select * from tbl_data
where ID in ('25','86')
ORDER BY 1;

use demo_db

select * from tbl_user
where username = "Sajarr"
order by uname;