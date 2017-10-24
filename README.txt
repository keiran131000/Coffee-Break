Welcome To Texecom Hackathon
============================

In this folder you will find tools which allow you to access data from the Ricochet device network.

Tools
=====

Ricochet Monitor - you can use this tool to visualise the Ricochet network and the signal strengths
Ricochet Data Recorder - you can use this tool to write the raw Ricochet data to a csv file and optionally a MySQL database

Database
========

A database has been running and collecting data from three sites (see below). You can access this data to perform analytics, get stats and build up
network maps for the sites.
The data is in an online MySQL database and you can use the following credentials to access it:

Host: sundog.no-ip.org
User: hackathon
Pass: hackathon2017
Db:   texecom

There are two tables:

 * locations
 * ricochet

The Ricochet data in the database is coming from three site locations, those are listed in the locations table, each site has an ExpanderId which is
used as the location identifier in the ricochet table.

The ricochet table contains the data from the Ricochet network where each entry is timestamped and associated with one of the site locations via the
ExpanderId field.


Data Locations
==============

The three sites which have been collecting data are:

1. Texecom offices
2. Manchester Science Museum A
3. Manchester Science Museum B

You will be provided floorplans and locations for all the sensors in those sites.

Table Schemas
=============

locations

+------------+-------------+------+-----+---------+----------------+
| Field      | Type        | Null | Key | Default | Extra          |
+------------+-------------+------+-----+---------+----------------+
| id         | int(11)     | NO   | PRI | NULL    | auto_increment |
| ExpanderId | int(11)     | YES  |     | NULL    |                |
| Name       | varchar(64) | YES  |     | NULL    |                |
+------------+-------------+------+-----+---------+----------------+

ricochet

+-------------+------------+------+-----+---------+----------------+
| Field       | Type       | Null | Key | Default | Extra          |
+-------------+------------+------+-----+---------+----------------+
| id          | int(11)    | NO   | PRI | NULL    | auto_increment |
| ExpanderId  | int(11)    | YES  |     | NULL    |                |
| Time        | datetime   | YES  |     | NULL    |                |
| DevNo       | int(11)    | YES  |     | NULL    |                |
| Type        | int(11)    | YES  |     | NULL    |                |
| Serial      | varchar(8) | YES  |     | NULL    |                |
| Mode1       | int(11)    | YES  |     | NULL    |                |
| Mode2       | int(11)    | YES  |     | NULL    |                |
| OuterDev    | int(11)    | YES  |     | NULL    |                |
| InnerDev    | int(11)    | YES  |     | NULL    |                |
| OuterRSSI   | int(11)    | YES  |     | NULL    |                |
| InnerRSSI   | int(11)    | YES  |     | NULL    |                |
| MasterRSSI  | int(11)    | YES  |     | NULL    |                |
| PollTime    | int(11)    | YES  |     | NULL    |                |
| Status      | int(11)    | YES  |     | NULL    |                |
| Active      | int(11)    | YES  |     | NULL    |                |
| DeviceData0 | int(11)    | YES  |     | NULL    |                |
| DeviceData1 | int(11)    | YES  |     | NULL    |                |
| DeviceData2 | int(11)    | YES  |     | NULL    |                |
| DeviceData3 | int(11)    | YES  |     | NULL    |                |
| DeviceData4 | int(11)    | YES  |     | NULL    |                |
| DeviceData5 | int(11)    | YES  |     | NULL    |                |
| DeviceData6 | int(11)    | YES  |     | NULL    |                |
| DeviceData7 | int(11)    | YES  |     | NULL    |                |
| DeviceData8 | int(11)    | YES  |     | NULL    |                |
+-------------+------------+------+-----+---------+----------------+

