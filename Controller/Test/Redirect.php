<?php
/**
 * Created by PhpStorm.
 * User: Lance
 * Date: 12/05/2016
 * Time: 05:18
 */

namespace Zengoma\MessageManagerExample\Controller\Test;


class Redirect extends \Zengoma\MessageManagerExample\Controller\Test
{

    public function execute()
    {
        $this->messageManager->addSuccess(
            __('Congratulations you have been successfully redirected to this page and your message is displaying'),
            'message_manager_example'
        );

        $this->_redirect('checkout/cart');
    }

}