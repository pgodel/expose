<?php

namespace Expose;

class Report
{
    /**
     * Name of variable being evaluated
     * @var string
     */
    private $varName = null;

    /**
     * Value of variable being evaluated
     * @var mixed
     */
    private $varValue = null;

    /**
     * Set of filters matched for the report
     * @var array
     */
    private $filterMatches = array();

    /**
     * Init the object and optionally set the variable name/value
     * 
     * @param string $varName Variable name [optional]
     * @param mixed $varValue Variable value [optional]
     */
    public function __construct($varName = null, $varValue = null)
    {
        if ($varName !== null) {
            $this->setVarName($varName);    
        }
        if ($varValue !== null) {
            $this->setVarValue($varValue);
        }
    }

    /**
     * Set the current variable's name
     * 
     * @param string $name Variable name
     */
    public function setVarName($name)
    {
        $this->varName = $name;
    }

    /**
     * Get the current variable's name
     * 
     * @return string Variable name
     */
    public function getVarName()
    {
        return $this->varName;
    }

    /**
     * Set variable value
     * 
     * @param mixed $value Variable value
     */
    public function setVarValue($value)
    {
        $this->varValue = $value;
    }

    /**
     * Get varaible value
     * 
     * @return mixed variable value
     */
    public function getVarValue()
    {
        return $this->varValue;
    }

    /**
     * Add filter match(es) for the report/variable relation
     *     Can take in either a single filter or a set
     * 
     * @param mixed $match Either a single \Expose\Filter or an array of them
     */
    public function addFilterMatch($match)
    {
        $match = (!is_array($match)) ? array($match) : $match;
        foreach ($match as $filter) {
            $this->filterMatches[] = $filter;    
        }
    }

    /**
     * Get the current set of filter matches
     * 
     * @return array Filter match set
     */
    public function getFilterMatch()
    {
        return $this->filterMatches;
    }
}