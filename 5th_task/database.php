<?php

class Database{

    function connect($lh,$un,$pass,$dbname)
    {
        $msql=new mysqli();
        $msql -> connect($lh,$un,$pass,$dbname);
         $this->msql=$msql;
    }


    function selectc($fname,$tablename)
    {
        $query="select * from $tablename where name=?";
        $st=$this->msql -> prepare($query);
        $st -> bind_param('s',$fname);
        $st -> execute();
        $result=$st -> get_result();
        $data=$result -> fetch_all(MYSQLI_ASSOC);

      return $data;
    }


    function insert($fname,$email,$pass,$room,$ext,$img,$tablename)
    {   $query="insert into $tablename (name,email,pass,room,ext,pp) values(?,?,?,?,?,?)";
        $st=$this->msql -> prepare($query);
        $st -> bind_param('ssssss',$fname,$email,$pass,$room,$ext,$img);
        $result=$st -> execute();
    }


    function update($email,$pass,$room,$ext,$img,$fname,$tablename)
    {
        $query="update $tablename set email=? , pass=? , room=? , ext=? ,pp=? where name=?";
        $st=$this->msql -> prepare($query);
        $st -> bind_param('ssssss',$email,$pass,$room,$ext,$img,$fname);
        $st -> execute();
    }


    function delete($fname,$tablename)
    {
        $query="delete from $tablename where name=?";
        $st=$this->msql -> prepare($query);
        $st -> bind_param('s',$fname);
        $st -> execute();
     

    }


    function select($tablename){
        $query="select * from $tablename ";
        $st=$this->msql -> prepare($query);
        $st -> execute();
        $result=$st -> get_result();
        $line=$result -> fetch_all(MYSQLI_ASSOC);

      return $line;
    }
    
    function close()
    {
        $this->msql->close();
    }
}