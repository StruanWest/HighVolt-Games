  CREATE TABLE HVGames_games_info (game_id INTEGER PRIMARY KEY,
    game_name TEXT,
    rating TEXT,
    main_character TEXT,
    genre TEXT,
    publisher TEXT,
    modes TEXT,
    age_rating INTEGER,
    price TEXT,
    best_seller TEXT,
    new_release TEXT);
    
INSERT INTO HVGames_games_info (game_id, game_name, rating, main_character, genre, publisher, modes, age_rating, price, best_seller, new_release) VALUES (1, "The Legend of Zelda: Breath of the Wild", "97%", "Link", "Adventure", "Nintendo", "Single-Player", 12, "£64.99", "YES", "NO");
INSERT INTO HVGames_games_info (game_id, game_name, rating, main_character, genre, publisher, modes, age_rating, price, best_seller, new_release) VALUES (2, "Horizon 2 Forbidden West", "94%", "Aloy", "Action", "Sony Interactive Entertainment", "Single-Player", 16, "£49.45", "YES", "YES");
INSERT INTO HVGames_games_info (game_id, game_name, rating, main_character, genre, publisher, modes, age_rating, price, best_seller, new_release) VALUES (3, "Elden Ring", "93%", "The Tarnished", "Adventure", "BANDAI NAMCO", "Multi-player", 17, "£28.99", "YES", "YES");
INSERT INTO HVGames_games_info (game_id, game_name, rating, main_character, genre, publisher, modes, age_rating, price, best_seller, new_release) VALUES (4, "FNAF Security Breach", "Not yet rated", "Gregory", "Survial Horror", "Scottgames", "Single-Player", 13, "£33.00", "YES", "NO");
INSERT INTO HVGames_games_info (game_id, game_name, rating, main_character, genre, publisher, modes, age_rating, price, best_seller, new_release) VALUES (5, "Spyro Reignited Trilogy", "79%", "Spyro", "Platform", "Activision", "Single-Player", 7, "£35.41", "NO", "NO");
INSERT INTO HVGames_games_info (game_id, game_name, rating, main_character, genre, publisher, modes, age_rating, price, best_seller, new_release) VALUES (6, "Pokemon Legends Arceus", "92%", "Akari & Rei", "Action", "Game Freak", "Single-Player", 3, "£39.99", "NO", "YES");
INSERT INTO HVGames_games_info (game_id, game_name, rating, main_character, genre, publisher, modes, age_rating, price, best_seller, new_release) VALUES (7, "Dying Light 2 Stay Human", "77%", "Aiden", "Survial Horror", "Techland", "Multi-player", 15, "44.99", "NO", "YES");
INSERT INTO HVGames_games_info (game_id, game_name, rating, main_character, genre, publisher, modes, age_rating, price, best_seller, new_release) VALUES (8, "Total War WARHAMMER III", "87%", "N/A", "Stratagy", "Creative Assembly", "Multi-player", 7, "£24.99", "NO", "YES");




CREATE table HVGames_consoles (
    game_id INTEGER,
    console_name TEXT);
    
INSERT INTO HVGames_consoles (game_id, console_name) VALUES (1, "Nintendo Switch");

INSERT INTO HVGames_consoles (game_id, console_name) VALUES (2, "PS4");
INSERT INTO HVGames_consoles (game_id, console_name) VALUES (2, "PS5");

INSERT INTO HVGames_consoles (game_id, console_name) VALUES (3, "PC");
INSERT INTO HVGames_consoles (game_id, console_name) VALUES (3, "PS4");
INSERT INTO HVGames_consoles (game_id, console_name) VALUES (3, "PS5");
INSERT INTO HVGames_consoles (game_id, console_name) VALUES (3, "Xbox One");
INSERT INTO HVGames_consoles (game_id, console_name) VALUES (3, "Xbox Series X/S");

INSERT INTO HVGames_consoles (game_id, console_name) VALUES (4, "PC");
INSERT INTO HVGames_consoles (game_id, console_name) VALUES (4, "PS4");
INSERT INTO HVGames_consoles (game_id, console_name) VALUES (4, "PS5");
INSERT INTO HVGames_consoles (game_id, console_name) VALUES (4, "Xbox One");
INSERT INTO HVGames_consoles (game_id, console_name) VALUES (4, "Xbox Series X/S");
INSERT INTO HVGames_consoles (game_id, console_name) VALUES (4, "Nintendo Switch");

INSERT INTO HVGames_consoles (game_id, console_name) VALUES (5, "PC");
INSERT INTO HVGames_consoles (game_id, console_name) VALUES (5, "PS4");
INSERT INTO HVGames_consoles (game_id, console_name) VALUES (5, "Xbox One");
INSERT INTO HVGames_consoles (game_id, console_name) VALUES (5, "Nintendo Switch");

INSERT INTO HVGames_consoles (game_id, console_name) VALUES (6, "Nintendo Switch");

INSERT INTO HVGames_consoles (game_id, console_name) VALUES (7, "PC");
INSERT INTO HVGames_consoles (game_id, console_name) VALUES (7, "PS4");
INSERT INTO HVGames_consoles (game_id, console_name) VALUES (7, "PS5");
INSERT INTO HVGames_consoles (game_id, console_name) VALUES (7, "Xbox One");
INSERT INTO HVGames_consoles (game_id, console_name) VALUES (7, "Xbox Series X/S");

INSERT INTO HVGames_consoles (game_id, console_name) VALUES (8, "PC");
INSERT INTO HVGames_consoles (game_id, console_name) VALUES (8, "Mac OS");
INSERT INTO HVGames_consoles (game_id, console_name) VALUES (8, "Linux");


-----------------JOIN/VIEW TABLES---------------------

select * from HVGames_games_info
  JOIN HVGames_consoles
  ON HVGames_consoles.game_id = HVGames_games_info.game_id;


---------------EXAMPLE TABLE UPDATES----------------------

Drop table <table name>;

UPDATE HVGames_games_info
  SET rating = '97%'
  WHERE game_id = 1;

  UPDATE HVGames_consoles
  SET console_name = 'Nindendo Switch'
  WHERE game_id = 1;






echo $result->best_seller . "<br>";
echo $result->new_release . "<br>";