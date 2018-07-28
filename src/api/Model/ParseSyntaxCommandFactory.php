<?php

namespace SyntaxTreeApi\Model;

use SyntaxTree\Command\TensorFlowCommand;
use SyntaxTree\Command\MaltParserCommand;
use SyntaxTree\SyntaxTree;
use SyntaxTreeApi\Config\Configuration;

class ParseSyntaxCommandFactory
{

    const SYSTEM_TENSOR_FLOW = SyntaxTree::SYSTEM_TENSOR_FLOW;

    public static function create($system = self::SYSTEM_TENSOR_FLOW)
    {
        return self::createTensorFlowCommand();
    }

    public static function createTensorFlowCommand()
    {
        $command = new TensorFlowCommand();

        return $command
            ->setSyntaxnetPath(Configuration::getSyntaxNetPath())
            ->setModelPath(Configuration::getSyntaxNetModelPath());
    }
}
