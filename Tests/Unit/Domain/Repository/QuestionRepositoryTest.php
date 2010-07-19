<?php
class Tx_KeQuestionnaireExtbase_Domain_Repository_QuestionRepositoryTest extends Tx_Extbase_BaseTestCase {
 
    protected $questionRepository;
    
    function setUp(){
        $this->questionRepository = t3lib_div::makeInstance('Tx_KeQuestionnaireExtbase_Domain_Repository_QuestionRepository');        
    }
    
    /**
     * @test
     */
    public function rightObjectsAreFound(){
        
        //$qs = $repo->findAll();
    }
}
?>