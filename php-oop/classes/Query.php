<?php
/**
 * Users
 */
class Query extends Main{
    private static $id;
    private static $name;
    private static $position;
    private static $skill;

    public static function setId( $id ){
        self::$id = $id;
    }

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
     * Update
     */
    public static function update( $table = 'users' ){
        $sql = "Update $table SET name = ?, position= ?, skill = ? WHERE id=?";
        $query = DB::prepare( $sql );
        $query->bindValue( 1, self::$name );
        $query->bindValue( 2, self::$position );
        $query->bindValue( 3, self::$skill );
        $query->bindValue( 4, self::$id );
        $result = $query->execute();
        if( $result ){
            return "Successfully data has been update";
        }else{
            return "Data updated failed. Please try again.";
        }
    }

}