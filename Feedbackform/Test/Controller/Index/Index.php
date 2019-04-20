<?php

namespace Feedbackform\Test\Controller\Index;

use Magento\Framework\App\Action\Context;

use Feedbackform\Test\Model\TestFactory;
use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * Booking action
     *
     * @return void
     */
    protected $_crud;

  

    public function __construct(        
        Context $context,
        TestFactory $crud)
    {
        $this->_crud = $crud;
 
        return parent::__construct($context);
    }

    public function execute()
    {
        // 1. POST request : Get booking data
        $post = (array) $this->getRequest()->getPost();
        //print_r($post);die("testing");

        if (!empty($post)) {
            // Retrieve your form data
            $firstname   = $post['firstname'];
            $lastname    = $post['lastname'];
            $phone       = $post['phone'];
            $bookingTime = $post['bookingTime'];

            // Doing-something with...



            $cruddata = $this->_crud->create(); 
            $cruddata->setData($post); 
            $cruddata->save();


            // Display the succes form validation message
            $this->messageManager->addSuccessMessage('Booking done !');
           //  print_r($post);die("testing"); 
            $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
            $resultRedirect->setUrl($this->_redirect->getRefererUrl());
            return $resultRedirect; 
        }
        // 2. GET request : Render the booking page 
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}