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

21


INSERT INTO event (user_id, updated, act_date, title, description)
VALUES(1, current_date, DATE '2018-9-12', 'On 9/12/18 two new members were baptized. The new converts names are Andrew and Diane Gregory. They were taught by the sister missionaries serving in the ward and baptized by Josh Arnold, a member of the elder’s quorum. On Sunday, 9/16/18 both of the Gregory’s were confirmed in sacrament meeting by President Danny Jensen of the Elders quorum. Andrew was then sustained to receive the Aaronic priesthood and to be ordained to the office of Priest.
');