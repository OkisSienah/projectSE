create table user(
    userid int primary key auto_increment not null,
    fname varchar(60),
    bdate varchar(60),
    gender varchar(8),
    address varchar(60),
    username varchar(60),
    password varchar(60)
);

create table order_log(
    order_id int primary key auto_increment not null,
    user varchar(30),
    q_noriAS int(10),
    q_noriIT int(10),
    q_noriTM int(10),
    q_noriR int(10),
    total int(60),
    buy_time timestamp
);

create table cart(
    user varchar(30),
    q_noriAS int(10),
    q_noriIT int(10),
    q_noriTM int(10),
    q_noriR int(10)
);

