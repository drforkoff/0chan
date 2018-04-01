<?php
/*****************************************************************************
 *   Copyright (C) 2006-2009, onPHP's MetaConfiguration Builder.             *
 *   Generated by onPHP-1.1.master at 2017-04-07 00:32:16                    *
 *   This file is autogenerated - do not edit.                               *
 *****************************************************************************/

	abstract class AutoBoard extends IdentifiableObject
	{
		protected $dir = null;
		protected $name = null;
		protected $description = null;
		protected $hidden = false;
		protected $nsfw = false;
		protected $blockRu = false;
		protected $createDate = null;
		protected $owner = null;
		protected $ownerId = null;
		protected $deleted = false;
		protected $deletedAt = null;
		protected $popularity = 0;
		protected $bumpLimit = 500;
		protected $threadLimit = 100;
		protected $favouritedBy = null;
		protected $moderators = null;
		protected $threads = null;
		
		public function getDir()
		{
			return $this->dir;
		}
		
		/**
		 * @return Board
		**/
		public function setDir($dir)
		{
			$this->dir = $dir;
			
			return $this;
		}
		
		public function getName()
		{
			return $this->name;
		}
		
		/**
		 * @return Board
		**/
		public function setName($name)
		{
			$this->name = $name;
			
			return $this;
		}
		
		public function getDescription()
		{
			return $this->description;
		}
		
		/**
		 * @return Board
		**/
		public function setDescription($description)
		{
			$this->description = $description;
			
			return $this;
		}
		
		public function getHidden()
		{
			return $this->hidden;
		}
		
		public function isHidden()
		{
			return $this->hidden;
		}
		
		/**
		 * @return Board
		**/
		public function setHidden($hidden = false)
		{
			$this->hidden = ($hidden === true);
			
			return $this;
		}
		
		public function getNsfw()
		{
			return $this->nsfw;
		}
		
		public function isNsfw()
		{
			return $this->nsfw;
		}
		
		/**
		 * @return Board
		**/
		public function setNsfw($nsfw = false)
		{
			$this->nsfw = ($nsfw === true);
			
			return $this;
		}
		
		public function getBlockRu()
		{
			return $this->blockRu;
		}
		
		public function isBlockRu()
		{
			return $this->blockRu;
		}
		
		/**
		 * @return Board
		**/
		public function setBlockRu($blockRu = false)
		{
			$this->blockRu = ($blockRu === true);
			
			return $this;
		}
		
		/**
		 * @return Timestamp
		**/
		public function getCreateDate()
		{
			return $this->createDate;
		}
		
		/**
		 * @return Board
		**/
		public function setCreateDate(Timestamp $createDate)
		{
			$this->createDate = $createDate;
			
			return $this;
		}
		
		/**
		 * @return Board
		**/
		public function dropCreateDate()
		{
			$this->createDate = null;
			
			return $this;
		}
		
		/**
		 * @return User
		**/
		public function getOwner()
		{
			if (!$this->owner && $this->ownerId) {
				$this->owner = User::dao()->getById($this->ownerId);
			}
			
			return $this->owner;
		}
		
		public function getOwnerId()
		{
			return $this->owner
				? $this->owner->getId()
				: $this->ownerId;
		}
		
		/**
		 * @return Board
		**/
		public function setOwner(User $owner)
		{
			$this->owner = $owner;
			$this->ownerId = $owner ? $owner->getId() : null;
			
			return $this;
		}
		
		/**
		 * @return Board
		**/
		public function setOwnerId($id)
		{
			$this->owner = null;
			$this->ownerId = $id;
			
			return $this;
		}
		
		/**
		 * @return Board
		**/
		public function dropOwner()
		{
			$this->owner = null;
			$this->ownerId = null;
			
			return $this;
		}
		
		public function getDeleted()
		{
			return $this->deleted;
		}
		
		public function isDeleted()
		{
			return $this->deleted;
		}
		
		/**
		 * @return Board
		**/
		public function setDeleted($deleted = false)
		{
			$this->deleted = ($deleted === true);
			
			return $this;
		}
		
		/**
		 * @return Timestamp
		**/
		public function getDeletedAt()
		{
			return $this->deletedAt;
		}
		
		/**
		 * @return Board
		**/
		public function setDeletedAt(Timestamp $deletedAt = null)
		{
			$this->deletedAt = $deletedAt;
			
			return $this;
		}
		
		/**
		 * @return Board
		**/
		public function dropDeletedAt()
		{
			$this->deletedAt = null;
			
			return $this;
		}
		
		public function getPopularity()
		{
			return $this->popularity;
		}
		
		/**
		 * @return Board
		**/
		public function setPopularity($popularity)
		{
			$this->popularity = $popularity;
			
			return $this;
		}
		
		public function getBumpLimit()
		{
			return $this->bumpLimit;
		}
		
		/**
		 * @return Board
		**/
		public function setBumpLimit($bumpLimit)
		{
			$this->bumpLimit = $bumpLimit;
			
			return $this;
		}
		
		public function getThreadLimit()
		{
			return $this->threadLimit;
		}
		
		/**
		 * @return Board
		**/
		public function setThreadLimit($threadLimit)
		{
			$this->threadLimit = $threadLimit;
			
			return $this;
		}
		
		/**
		 * @return BoardFavouritedByDAO
		**/
		public function getFavouritedBy($lazy = false)
		{
			if (!$this->favouritedBy || ($this->favouritedBy->isLazy() != $lazy)) {
				$this->favouritedBy = new BoardFavouritedByDAO($this, $lazy);
			}
			
			return $this->favouritedBy;
		}
		
		/**
		 * @return Board
		**/
		public function fillFavouritedBy($collection, $lazy = false)
		{
			$this->favouritedBy = new BoardFavouritedByDAO($this, $lazy);
			
			if (!$this->id) {
				throw new WrongStateException(
					'i do not know which object i belong to'
				);
			}
			
			$this->favouritedBy->mergeList($collection);
			
			return $this;
		}
		
		/**
		 * @return BoardModeratorsDAO
		**/
		public function getModerators($lazy = false)
		{
			if (!$this->moderators || ($this->moderators->isLazy() != $lazy)) {
				$this->moderators = new BoardModeratorsDAO($this, $lazy);
			}
			
			return $this->moderators;
		}
		
		/**
		 * @return Board
		**/
		public function fillModerators($collection, $lazy = false)
		{
			$this->moderators = new BoardModeratorsDAO($this, $lazy);
			
			if (!$this->id) {
				throw new WrongStateException(
					'i do not know which object i belong to'
				);
			}
			
			$this->moderators->mergeList($collection);
			
			return $this;
		}
		
		/**
		 * @return BoardThreadsDAO
		**/
		public function getThreads($lazy = false)
		{
			if (!$this->threads || ($this->threads->isLazy() != $lazy)) {
				$this->threads = new BoardThreadsDAO($this, $lazy);
			}
			
			return $this->threads;
		}
		
		/**
		 * @return Board
		**/
		public function fillThreads($collection, $lazy = false)
		{
			$this->threads = new BoardThreadsDAO($this, $lazy);
			
			if (!$this->id) {
				throw new WrongStateException(
					'i do not know which object i belong to'
				);
			}
			
			$this->threads->mergeList($collection);
			
			return $this;
		}
	}
?>