<?php
    require_once 'db.php';
    
    function show_software_business()
    {
        global $con;
        $query = "SELECT title, description, date, image FROM software WHERE type='business' ORDER BY date DESC";
        $result = mysqli_query($con,$query);
        return $result;
    }

    function show_software_edutech()
    {
        global $con;
        $query = "SELECT title, description, date, image FROM software WHERE type='educational technology' ORDER BY date DESC";
        $result = mysqli_query($con,$query);
        return $result;
    }

    function show_software_gamedev()
    {
        global $con;
        $query = "SELECT title, description, date, image FROM software WHERE type='game development' ORDER BY date DESC";
        $result = mysqli_query($con,$query);
        return $result;
    }

    function show_software_ai()
    {
        global $con;
        $query = "SELECT title, description, date, image FROM software WHERE type='artificial intelligence' ORDER BY date DESC";
        $result = mysqli_query($con,$query);
        return $result;
    }

    function show_vlog_softwaredev()
    {
        global $con;
        $query = "SELECT title, description, date, link, thumbnail FROM vlog WHERE type='software development' ORDER BY date DESC";
        $result = mysqli_query($con,$query);
        return $result;
    }

    function show_vlog_datascience()
    {
        global $con;
        $query = "SELECT title, description, date, link, thumbnail FROM vlog WHERE type='data science' ORDER BY date DESC";
        $result = mysqli_query($con,$query);
        return $result;
    }

    function show_vlog_educational()
    {
        global $con;
        $query = "SELECT title, description, date, link, thumbnail FROM vlog WHERE type='educational' ORDER BY date DESC";
        $result = mysqli_query($con,$query);
        return $result;
    }

    function show_vlog_gamemodding()
    {
        global $con;
        $query = "SELECT title, description, date, link, thumbnail FROM vlog WHERE type='game modding' ORDER BY date DESC";
        $result = mysqli_query($con,$query);
        return $result;
    }

    function show_pub_journal()
    {
        global $con;
        $query = "SELECT title, publisher, level, role, date, link FROM publication WHERE type='journal' ORDER BY date DESC";
        $result = mysqli_query($con,$query);
        return $result;
    }

    function show_pub_conference()
    {
        global $con;
        $query = "SELECT title, publisher, level, role, date, link FROM publication WHERE type='conference' ORDER BY date DESC";
        $result = mysqli_query($con,$query);
        return $result;
    }

    function show_pub_labManual()
    {
        global $con;
        $query = "SELECT title, publisher, level, role, date FROM publication WHERE type='lab manual' ORDER BY date DESC";
        $result = mysqli_query($con,$query);
        return $result;
    }

    function show_pub_bookArticle()
    {
        global $con;
        $query = "SELECT title, publisher, level, role, date FROM publication WHERE type='book article' ORDER BY date DESC";
        $result = mysqli_query($con,$query);
        return $result;
    }

    function show_pub_courseware()
    {
        global $con;
        $query = "SELECT title, publisher, level, role, date FROM publication WHERE type='courseware' ORDER BY date DESC";
        $result = mysqli_query($con,$query);
        return $result;
    }
?>