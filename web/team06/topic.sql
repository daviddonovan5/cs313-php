

# Create the topic table 
CREATE TABLE topic (
   id      SERIAL        NOT NULL
 , name    VARCHAR(40)   NOT NULL
 ,CONSTRAINT pk_topic_1 PRIMARY KEY(id)
  );

# Adding Faith, Sacrifice, & Charity 

INSERT INTO topic (name) VALUES ('Sacrifice');
INSERT INTO topic (name) VALUES ('Charity');
INSERT INTO topic (name) VALUES ('Faith');

#Create table to connect topic and scripture 
CREATE TABLE scripture_topic (
    id            SERIAL     NOT NULL	
  , scriptureId   INT        NOT NULL 
  , topicId       INT        NOT NULL 
  , PRIMARY KEY (id)
  , FOREIGN KEY (scriptureId) REFERENCES scriptures (id)
  , FOREIGN KEY (topicId)     REFERENCES topic (id)
  );
