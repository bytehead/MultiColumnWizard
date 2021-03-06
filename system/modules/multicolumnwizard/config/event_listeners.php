<?php

/**
 * Contao Open Source CMS
 *
 * @copyright  MEN AT WORK 2017
 * @package    MultiColumnWizard
 * @license    LGPL
 * @filesource
 */

use ContaoCommunityAlliance\DcGeneral\Factory\Event\BuildDataDefinitionEvent;
use MultiColumnWizard\DcGeneral\UpdateDataDefinition;

return array
(
    BuildDataDefinitionEvent::NAME => array(
        array(
            array(new UpdateDataDefinition(), 'addMcwFields'),
            UpdateDataDefinition::PRIORITY
        )
    )
);