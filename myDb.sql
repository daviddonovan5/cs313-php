CREATE TABLE organization 
( organization_id           SERIAL 
, organization_name 		VARCHAR(50)            NOT NULL
, CONSTRAINT pk_org_1     PRIMARY KEY(organization_id)
);


CREATE TABLE users
( user_id                   SERIAL
, organization_id 		    INT             NOT NULL
, email                     VARCHAR(255)    NOT NULL
, first_name                VARCHAR(80)     NOT NULL
, last_name                 VARCHAR(80)     NOT NULL
, CONSTRAINT pk_user_1    PRIMARY KEY(user_id)
, CONSTRAINT fk_user_1    FOREIGN KEY(organization_id) REFERENCES organization(organization_id)
);

CREATE TABLE event
( event_id                  SERIAL
, user_id 		  			INT            NOT NULL
, organization_id           INT            
, email                     VARCHAR(255)   NOT NULL
, first_name                VARCHAR(80)    NOT NULL
, last_name                 VARCHAR(80)    NOT NULL
, CONSTRAINT pk_event_1    PRIMARY KEY(user_id)
, CONSTRAINT fk_event_1    FOREIGN KEY(user_id)         REFERENCES users(user_id)
, CONSTRAINT fk_event_2    FOREIGN KEY(organization_id) REFERENCES organization(organization_id)
);

INSERT INTO organization (organization_name)
VALUES ('Bishopric');
INSERT INTO organization (organization_name)
VALUES ('Reflief Society');
INSERT INTO organization (organization_name)
VALUES ('Elders Quorum');
INSERT INTO organization (organization_name)
VALUES ('Young Men');
INSERT INTO organization (organization_name)
VALUES ('Young Women');
INSERT INTO organization (organization_name)
VALUES ('Primary');
INSERT INTO organization (organization_name)
VALUES ('Ward Missionary');
INSERT INTO organization (organization_name)
VALUES ('Sunday School');
INSERT INTO organization (organization_name)
VALUES ('Ward Activities');

ALTER TABLE event
ADD updated date NOT NULL;