<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Inbox cell
 */
class InboxCell extends Cell
{

    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Default display method.
     *
     * @return void
     */
    public function display($sort_by)
    {	
		$this->loadModel('Master.Masters');
		$reviewOrder = $this->Masters->find('list')
			->where([
				'Masters.type' => 'review_order'
			])->all()->toArray();
		$this->set('sort_by', $sort_by);
		$this->set('reviewOrder', $reviewOrder);
    } 

	/**
     * Default display method.
     *
     * @return void
     */
    public function blogSideMenu()
    {	
		$this->loadModel('Blog.Blogs');
		$recentBlog = $this->Blogs->find('translations')->order(['Blogs.id' => 'asc'])->limit(5)->toArray();		
		$this->set('recentBlog', $recentBlog);
		
		$this->loadModel('Master.Masters');
		$blogCategory = $this->Masters->find('list',[
    'keyField' => 'slug',
    'valueField' => 'name'
])
			->where([
				'is_deleted' => 0,
				'Masters.type' => 'blog_category'
			])->all()->toArray();
		$this->set('blogCategory', $blogCategory);
    } 
}
