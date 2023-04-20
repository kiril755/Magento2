<?php
namespace Task\InterceptUsernameValue\Plugin;

class CreatePostPlugin
{
    public function aroundExecute(
        \Magento\Customer\Controller\Account\CreatePost $subject,
        \Closure $proceed
    ) {
        // Get the input value from the form
        $username = $subject->getRequest()->getPost('firstname');

        // Modify the input value
        $prefix = 'before ';
        $suffix = ' after';
        $modifiedValue = $prefix . $username . $suffix;

        // Set the modified input value back to the request object
        $subject->getRequest()->setPostValue('firstname', $modifiedValue);

        return $proceed();
    }
}
