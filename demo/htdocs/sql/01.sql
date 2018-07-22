create database pocket encoding = 'UTF8';

create table languages
(
	id serial primary key,
	name text not null UNIQUE,
	is_default boolean not null default false
);

insert into languages (name, is_default) values ('English', true);
insert into languages (name) values ('Český Jazyk');
insert into languages (name) values ('汉语');
insert into languages (name) values ('Български');

create table texts
(
	id serial primary key,
	language_id int not null references languages,
	content text not null
);

insert into texts (language_id, content) values(1, 'This is a text in many languages.');
insert into texts (language_id, content) values(2, 'Toto je text v mnoha jazycích.');
insert into texts (language_id, content) values(3, '这是许多语言文字');
insert into texts (language_id, content) values(4, 'Този текст е на много езици.');
