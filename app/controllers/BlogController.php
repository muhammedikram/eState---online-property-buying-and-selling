<?php

class BlogController extends ControllerBase

{
	public function indexAction()
	{
		$showblogs = Blog::find();
        
        $this->view->blog = $showblogs;
		

	}

	public function addblogAction()

	{
		  $request = $this->request;
            if ($request->isPost()) {

            $bName = $request->getPost('name');
            $bTitle = $request->getPost('title');
            $bDescription = $request->getPost('description');
            $bImage1 = $request->getPost('image1');
            $bImage2 = $request->getPost('image2');

            $blog = new Blog();
            $blog->name = $bName;
            $blog->title = $bTitle;
            $blog->description =$bDescription;
            $blog->save();

            if ($blog->save()) {
            	 $this->flash->success("Blog has been successfully saved");
            }

            //die(var_dump($bDescription));

          }

	}
}

?>