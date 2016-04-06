<?php

class AboutController extends ControllerBase

{
	public function indexAction()
	{

	}
	public function contactAction()
	{
		
	}
	
	public function employeesAction()
	{
		$sap = new \SAP();
		
		$this->view->employees = $sap->getAllEmployees();
		
	
	}


	public function employeesOrdersAction()
		{

		$sap = new \SAP();
			$this->view->employees = $sap->getAllEmployees();
	
			if($this->request->isPost()) {

				$employeeNumber=$this->request->getPost('salesemployee');
				$to=$this->request->getPost('to');
				$from=$this->request->getPost('from');
	
				$employeesOrders= $sap->getemployeesOrders($employeeNumber,$to,$from);
//Download function			
			if($this->request->getPost('action') == 'download') {
				
				$this->view->disable();
				$settings = $this->formatSpreadsheetSettings();
				
					$headings = array(
				    'Payment Term',
					'PO',
					'Suplier Name',
					'Document Date',
					'Description',
					'Quantity',
					'Converted Currency',
					'Local Currency',
					'Local Currency Type'
		         );

				//remove currency rows.
				foreach($employeesOrders as &$entry) {
					unset($entry['currency']);
				}

				if($settings['outputType'] == 'csv') {

		            $this->response->setHeader('Content-Type',        'text/csv');
		            $this->response->setHeader('Cache-Control',       'no-store, no-cache');
		            $this->response->setHeader('Content-Disposition', 'attachment; filename="CompanyCreditCards.csv"');

		            $outputStream = fopen('php://output', 'w');

		            fputcsv($outputStream, $headings, ',', '"');

		            foreach ($employeesOrders as $d) {
		                fputcsv($outputStream, $d, ',', '"');
		            }

		            fclose($outputStream);

	        	} else {
	        		
		            $xlsx = new \File\XLSX();

		            $content = array();

		            $content[] = $headings;
		            foreach($employeesOrders as $d) {
		                $content[] = array_values($d);
		            }

		            $xlsx->generateSpreadsheet($content, 'Company Credit Cards', array(), $settings['options']);
		        	
		        }	
			}

				$selected = $employeeNumber;
				$this->view->employeesOrders=$employeesOrders;
		
		}
			

			$this->view->selected = $selected;

	}


	public function categoryAction()
	{
		$sap = new \SAP();
	$category= $sap->getCategory();
    $this->view->category=$category;	
}
	

/*
	public function productsAction()
		{

		$sap = new \SAP();
			$this->view->category = $sap->getCategory();
	
			if($this->request->isPost()) {

				$category=$this->request->getPost('category');
		
	
				$products= $sap->getProducts($category);


				$selected = $category;
				$this->view->products=$products;
		
		}
			

			$this->view->selected = $selected;

	}
*/
	public function servicesAction() {

		  $reviews = Rating::find(
                 array(
                    'enabled = :enabled:',
                    'limit' => 3,
                    'bind'=>array(
                    'enabled' => 1
                    )
                )
            );
         $this->view->ratings=$reviews;

         		     //get the url of the pagE
            $url = $_SERVER['HTTP_REFERER'];

            $request = $this->request;
            if ($request->isPost()) {

            $rName = $request->getPost('name');
            $remail = $request->getPost('email');
            $rComments = $request->getPost('comments');
            $rRating = $request->getPost('rating');

            $user = new Rating();
        
            $user->name = $rName;
            $user->email = $remail;
            $user->rating = $rRating.".png";
            $user->comments = $rComments;

            $user->save(); 

            if ($user->save()) {
                         $this->flash->success('Thank you for your feedback');


                         return $this->forward($url);


            }

        }
	}

	public function valuationAction() {
		
	}

	
	
}
?>