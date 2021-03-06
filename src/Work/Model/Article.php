<?php
namespace Eadmin\Work\Model;

use Eadmin\Basic\Model;

class Article extends Model
{
	public $verbose_name = '后台文章管理';

	public $comment = '文章管理';

	public $list_display = [
        'id',
        'article_name',
        'article_content',
    ];

	public $id = [
		'type' => 'PrimaryField',
		'comment' => '主键ID',
		'label' => 'ID',
	];

	public $cover_id = [
		'type' => 'ImageField',
		'comment' => '封面',
		'max_length' => 100,
		'default' => 0,
	];

	public $pic_id = [
		'type' => 'ImageField',
		'comment' => '图片',
		'max_length' => 100,
		'default' => 0,
	];

	public $pics_id = [
		'type' => 'ImagesField',
		'comment' => '相册',
		'max_length' => 100,
		'default' => 0,
	];

	public $article_name = [
		'type' => 'TextField',
		'comment' => '名称',
		'max_length'   => 10,
		'null'	       => true,
		'htmlOptions' => [
			'max_length'   => 20,
			'min_length'   => 10,
			'required'	   => 'required',
		],
	];

	public $article_content = [
		'type' => 'UeditorField',
		'comment' => '内容',
		'htmlOptions' => [
			'max_length'   => 400,
			'min_length'   => 10,
			'required'	   => 'required',
		],
	];

	public $state = [
		'type' => 'StateField',
		'label' => '状态',
		'comment' => '状态（0为禁用，1为启用）',
		'default' => 0,
		'options' => [
			'choices' => [
				0 => '禁用',
				1 => '启用',
			],
		]
	];

}