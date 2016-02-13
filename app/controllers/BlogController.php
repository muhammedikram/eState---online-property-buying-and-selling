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

		             if ($this->request->hasFiles() == true) {
		            $baseLocation = '/estate/public/images/';

		            // Print the real file names and sizes
		            foreach ($this->request->getUploadedFiles() as $file) {
		               
		            $file->moveTo($baseLocation . $file->getName());

		            $blog = new Blog();
		            $blog->name = $bName;
		            $blog->title = $bTitle;
		            $blog->description =$bDescription;
		           $blog->image1 = $file->getName();

		            $blog->save();

		            if ($blog->save()) {
		            	 $this->flash->success("Blog has been successfully saved");
		            }

		        }
		    }
		  }

		}
	}

?>