drop database `media` if EXISTS;
create database `media` ;
create table `media`(
    id mediumint not null AUTO_INCREMENT primary key,
    title VARCHAR(255) not null,
    rating decimal(2,1)null,
    summary text not null,
    has_won_awards int not null,
    length_in_minutes int not null,
    released_at date null,
    seasons int not null,
    country enum('NL','UK') not null,
    youtube_trailer_id VARCHAR(255) null,
    type_media enum('Serie', 'Film')
)
