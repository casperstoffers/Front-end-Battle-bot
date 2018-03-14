CREATE TABLE user (
  user_id INT AUTO_INCREMENT NOT NULL,
  username VARCHAR(256) NOT NULL,
  password VARCHAR(256) NOT NULL,
  role VARCHAR(256) NOT NULL,
  CONSTRAINT user_pk PRIMARY KEY (user_id)
);

CREATE TABLE game (
  game_id INT AUTO_INCREMENT NOT NULL,
  name VARCHAR(256) NOT NULL,
  CONSTRAINT game_pk PRIMARY KEY (game_id)
);

CREATE TABLE result (
  user_id INT NOT NULL,
  game_id INT NOT NULL,
  points INT NOT NULL,
  time DATETIME DEFAULT CURRENT_TIMESTAMP,
  CONSTRAINT user_fk FOREIGN KEY (user_id)
  REFERENCES user(user_id),
  CONSTRAINT game_pk FOREIGN KEY (game_id)
  REFERENCES game(game_id),
  CONSTRAINT result_pk PRIMARY KEY (user_id, game_id)
);

INSERT INTO user 
VALUES (NULL, "user1", "pass1", "user");

INSERT INTO user 
VALUES (NULL, "user2", "pass2", "user");

INSERT INTO user 
VALUES (NULL, "user3", "pass3", "user");

INSERT INTO user 
VALUES (NULL, "user4", "pass4", "user");

INSERT INTO user 
VALUES (NULL, "user5", "pass5", "user");

INSERT INTO user 
VALUES (NULL, "user6", "pass6", "user");

INSERT INTO user 
VALUES (NULL, "user7", "pass7", "user");

INSERT INTO user 
VALUES (NULL, "user8", "pass8", "user");

INSERT INTO user 
VALUES (NULL, "user9", "pass9", "user");

INSERT INTO user 
VALUES (NULL, "user10", "pass10", "user");

INSERT INTO user 
VALUES (NULL, "admin", "pass11", "user");

INSERT INTO game
VALUES (NULL, "spel1");

INSERT INTO game
VALUES (NULL, "spel2");

INSERT INTO game
VALUES (NULL, "spel3");

INSERT INTO game
VALUES (NULL, "spel4");
