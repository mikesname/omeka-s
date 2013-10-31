<?php
namespace Omeka\Api\Adapter;

use Omeka\Api\Exception;
use Omeka\Api\Request;
use Omeka\Api\RequestAwareInterface;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Abstract API adapter.
 */
abstract class AbstractAdapter implements
    AdapterInterface,
    RequestAwareInterface,
    ServiceLocatorAwareInterface
{
    /**
     * @var Request
     */
    protected $request;

    /**
     * @var ServiceLocatorInterface
     */
    protected $services;

    /**
     * Search operation stub.
     */
    public function search($data = null)
    {
        throw new Exception\RuntimeException(
            'The adapter does not implement the search function.'
        );
    }

    /**
     * Create operation stub.
     */
    public function create($data = null)
    {
        throw new Exception\RuntimeException(
            'The adapter does not implement the create function.'
        );
    }

    /**
     * Read operation stub.
     */
    public function read($id, $data = null)
    {
        throw new Exception\RuntimeException(
            'The adapter does not implement the read function.'
        );
    }

    /**
     * Update operation stub.
     */
    public function update($id, $data = null)
    {
        throw new Exception\RuntimeException(
            'The adapter does not implement the update function.'
        );
    }

    /**
     * Delete operation stub.
     */
    public function delete($id, $data = null)
    {
        throw new Exception\RuntimeException(
            'The adapter does not implement the delete function.'
        );
    }

    /**
     * Set the API request.
     *
     * @param Request $request
     */
    public function setRequest(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Get the API request.
     *
     * @return Request
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Set the service locator.
     * 
     * @param ServiceLocatorInterface $serviceLocator
     */
    public function setServiceLocator(ServiceLocatorInterface $serviceLocator)
    {
        $this->services = $serviceLocator;
    }

    /**
     * Get the service locator.
     * 
     * @return ServiceLocatorInterface
     */
    public function getServiceLocator()
    {
        return $this->services;
    }
}
