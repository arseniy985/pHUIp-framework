CREATE TABLE posts (
    id int unsigned auto_increment primary key ,
    title varchar(300) not null,
    content varchar(1500) not null,
    updated_at datetime not null,
    created_at datetime not null
)