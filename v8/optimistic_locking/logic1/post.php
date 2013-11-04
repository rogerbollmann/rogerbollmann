<?php

class Post {

	private $id;
	private $created;
	private $title;
	private $content;
        private $timestamp; //used for optimistic locking for checking with the old timestamp

	// row table gateway functionality
	public function findByID($id) {
		$sql = "SELECT * FROM tbl_person WHERE id = :id";
		$fieldValueMapping = array(':id'=>$id);

		$pquery = prepareSql($sql);
		$pquery->setFetchMode(PDO::FETCH_CLASS, 'Post');
		$pquery = executeSql($pquery, $fieldValueMapping);

		$post = $pquery->fetch();
		$this->setId($post->getId());
		$this->setCreated($post->getCreated());
		$this->setTitle($post->getTitle());
		$this->setContent($post->getContent());
                $this->setTimestamp($post->getTimestamp());
	}

	public function create() {
		$sql = "INSERT INTO tbl_person (created, title, content) VALUES (:created, :title, :content, :timestamp)";
                $timestamp = time(); //actual time
		$fieldValueMapping = array(':created'=>$this->getCreated(),':title'=>$this->getTitle(), ':content'=>$this->getContent(), ':timestamp'=>$timestamp);

		$pquery = prepareSql($sql);
		$pquery = executeSql($pquery, $fieldValueMapping);
		$this->setId(getDb()->lastInsertId());
	}

	public function update() {
		$sql = "UPDATE tbl_person SET created = :created, title = :title, content = :content, timestamp = :newTimestamp WHERE id = :id and timestamp = :oldTimestamp";
		$fieldValueMapping = array(':created'=>$this->getCreated(),':title'=>$this->getTitle(), ':content'=>$this->getContent(), ':id'=>$this->getId(), ':newTimestamp'=>time(), 'oldTimestamp'=>$this->getTimestamp());

		$pquery = prepareSql($sql);
		$pquery = executeSql($pquery, $fieldValueMapping);
                
                //throw an exception when old Timestamp is not equals with the actual timestamp
                if($stmt->rowCount() == 0) {
                        throw new Exception("Row was updated in the mean time: Update failed\n");
                }
	}

	public function delete() {
		$sql = "DELETE FROM tbl_person  WHERE id=:id";
		$fieldValueMapping = array(':id'=>$this->getId());

		$pquery = prepareSql($sql);
		$pquery = executeSql($pquery, $fieldValueMapping);
	}

	// getters and setters

	public function setId($id) 	{
		$this->id = $id;
	}

	public function getId() {
		return $this->id;
	}

	public function setCreated($created) 	{
		$this->created = $created;
	}
        
        public function setTimestamp($timestamp) 	{
		$this->timestamp = $timestamp;
	}

	public function getCreated() {
		return $this->created;
	}

	public function setTitle($title) 	{
		$this->title = $title;
	}

	public function getTitle() {
		return $this->title;
	}

	public function setContent($content) 	{
		$this->content = $content;
	}

	public function getContent() {
		return $this->content;
	}
        
        public function getTimestamp() {
		return $this->timestamp;
	}

}
