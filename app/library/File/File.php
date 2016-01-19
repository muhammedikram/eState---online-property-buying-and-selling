<?php

namespace File;

/**
 * Wrapper for `fopen()` and a bunch of functions relating to files.
 */
class File
{
	protected $folder;
	protected $fileName;
	protected $permission;
	
	protected $handle;
	
	
	
	public function __construct($folder, $fileName, $permission = 'r',
			$mustExist = false)
	{
		$this->folder     = $folder;
		$this->fileName   = $fileName;
		$this->permission = $permission;
		
		if ($mustExist && !$this->getExists()) {
			throw new \Exception('File does not exist.');
		}
	}
	
	public function __destruct()
	{
		$this->close();
	}
	
	
	
	public function __toString()
	{
		return $this->getFullPath();
	}
	
	
	
	public function open()
	{
		$this->handle = fopen($this, $this->permission);
		
		if ($this->handle === false) {
			throw new \Exception('Unable to read file.');
		}
	}
	
	public function close()
	{
		return (is_resource($this->handle))
				? fclose($this->handle)
				: true;
	}
	
	
	
	public function getFullPath()
	{
		return $this->folder . '/' . $this->fileName;
	}
	
	public function getFolder()
	{
		return $this->folder;
	}
	
	public function getFilename()
	{
		return $this->filename;
	}
	
	
	
	public function getAccessedDate()
	{
		$accessedEpoch = @fileatime($this);
		
		return \DateTime::createFromFormat('U', $accessedEpoch);
	}
	
	public function getModifiedDate()
	{
		$modifiedEpoch = @filemtime($this);
		
		return \DateTime::createFromFormat('U', $modifiedEpoch);
	}
	
	public function getCreatedDate()
	{
		$createdEpoch = @filectime($this);
		
		return \DateTime::createFromFormat('U', $createdEpoch);
	}	
	
	
	
	public function getFileSize()
	{
		return filesize($this);
	}
	
	
	
	public function getExists()
	{
		return file_exists($this);
	}
	
	
	
	public function read()
	{
		return file_get_contents($this);
	}
	
	public function save($contents)
	{
		return file_put_contents($this, $contents);
	}
	
	
	
	public function delete()
	{
		return unlink($this);
	}
	
	
	
	public function getOwner()
	{
		$userID = fileowner($this);
		
		$user = posix_getpwuid($userID);
		
		return $user['name'];
	}
	
	public function getGroup()
	{
		$groupID = filegroup($this);
		
		$group = posix_getgrgid($groupID);
		
		return $group['name'];
	}
	
	public function getPermissions()
	{
		return fileperms($this);
	}
}