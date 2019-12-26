create table article
(
  id int unsigned primary key not null auto_increment,
  name varchar(200) not null,
  
  created_at timestamp default current_timestamp,
  updated_at timestamp default current_timestamp
)
create table article_detail
(
  id int unsigned primary key not null auto_increment,
  article_id int unsigned,
  name varchar(200) not null,
  day date not null,
  description text not null,
  created_at timestamp default current_timestamp,
  updated_at timestamp default current_timestamp
)