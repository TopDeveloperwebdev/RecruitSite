<?php

//XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
//XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
// API Profiler - Behavioral System
// Created by: Alessandro Garcia
// Version: 3.01  -  Date: 27/nov/2016
// PLEASE: read installation.txt file before make changes on this config
// All rights reserved to Solides Tecnologia S/A
// Disclosure or transfer of this API is not allowed to third parties
// Contact: +55 (31) 98212-4321 / alessandro@solides.com.br
//XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
//XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

//Here you need inform the Token to access WebService
$token = "nfjkdnunUHlByYgjhsj67369JlkkUGvjk-senior";

//Here you need inform the language exactly like showed on the exemples below
//Options: Portugues, Ingles, Espanhol
$idioma = "Ingles"; 

//Here you will inform what do you want to sse on the final result of the questionnary answer
//Options: Report, Array, Nothing
$finalresult = "Report"; 

//Type of report you want to receive from WebService (if you choose "report" above
//Options: Synthetic, Regular, Extended
$reporttype = "Regular";

//Record info into a Data Base
//You need to create the table to receive datas. The script to create this table is on installation.txt
//Strong recomended to choose YES
$optrecord = "No"; //options: Yes, No to record on data base or not record (only show return)
$dbaddressip = "localhost"; //ip or address to data base
$dbname = "profiler"; //name of data base
$dbuser = "root"; //user to log into data base
$dbpassword = ""; //password to access data base

//Image to insert on top report (.jpg, .gif or .png, with 820x80 pixels)
//Exemple: "http://www.rhpro.com.br/system/img/cabrelatoriop.jpg"
$imagetopreport = "http://www.rhpro.com.br/system/img/cabrelatoriop.jpg";

?>