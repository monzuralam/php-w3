<?php
/**
 * Category Model
 */
class CatModel{
    public function categoryList(){
        $data = [
            'web-development'   =>      'Web Development',
            'web-design'        =>      'Web Design',
            'docker'            =>      'Docker',
            'linux'             =>      'Linux',
        ];
        return $data;
    }
}