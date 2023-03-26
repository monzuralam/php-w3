<?php
/**
 * Users
 */
class Query{
    private static $name;
    private static $position;
    private static $skill;

    public static function setName( $name ){
        self::$name = $name;
    }

    public static function setPosition( $position ){
        self::$position = $position;
    }

    public static function setSkill( $skill ){
        self::$skill = $skill;
    }

    /**
     * Insert
     * @param string $table
     * @return string
     */
    public static function insert( $table = 'users' ){
        $sql = "INSERT INTO $table VALUES(:id, :name, :position, :skill )";
        $query = DB::prepare( $sql );
        $query->bindValue( ':id', NULL );
        $query->bindValue( ':name', self::$name );
        $query->bindValue( ':position', self::$position );
        $query->bindValue( ':skill', self::$skill );
        $result = $query->execute();
        if( $result ){
            return 'Success';
        }else{
            return "failed";
        }

    }

    /**
     * Read All Data in any table
     * 
     * @param dbtable_name
     */
    public static function ReadAll( $table = 'users' ){
        $sql = "SELECT * FROM $table;";
        $query = DB::prepare( $sql );
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }
}