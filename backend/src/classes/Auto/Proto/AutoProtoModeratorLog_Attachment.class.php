<?php
/*****************************************************************************
 *   Copyright (C) 2006-2009, onPHP's MetaConfiguration Builder.             *
 *   Generated by onPHP-1.1.master at 2018-01-04 15:17:04                    *
 *   This file is autogenerated - do not edit.                               *
 *****************************************************************************/

	abstract class AutoProtoModeratorLog_Attachment extends ProtoModeratorLog_Post
	{
		protected function makePropertyList()
		{
			return
				array_merge(
					parent::makePropertyList(),
					array(
						'threadId' => LightMetaProperty::fill(new LightMetaProperty(), 'threadId', 'thread_id', 'integer', null, 4, false, true, false, null, null),
						'threadTitle' => LightMetaProperty::fill(new LightMetaProperty(), 'threadTitle', 'thread_title', 'string', null, 255, false, true, false, null, null),
						'postId' => LightMetaProperty::fill(new LightMetaProperty(), 'postId', 'post_id', 'integer', null, 4, false, true, false, null, null),
						'attachmentId' => LightMetaProperty::fill(new LightMetaProperty(), 'attachmentId', 'attachment_id', 'integer', null, 4, false, true, false, null, null),
						'id' => LightMetaProperty::fill(new LightMetaProperty(), 'id', null, 'integerIdentifier', 'ModeratorLog_Attachment', 8, true, true, false, null, null)
					)
				);
		}
	}
?>