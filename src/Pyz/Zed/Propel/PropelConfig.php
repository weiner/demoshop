<?php

/**
 * This file is part of the Spryker Demoshop.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Propel;

use Spryker\Zed\Propel\PropelConfig as SprykerPropelConfig;

class PropelConfig extends SprykerPropelConfig
{

    /**
     * @return array
     */
    public function getPropelSchemaPathPatterns()
    {
        return array_merge(
            [APPLICATION_SOURCE_DIR . '/*/Zed/*/Persistence/Propel/Schema/'],
            parent::getPropelSchemaPathPatterns(),
            $this->getSprykerFilePathPatterns()
        );
    }

    /**
     * @project Only needed in Project, not in demoshop
     *
     * @return array
     */
    protected function getSprykerFilePathPatterns()
    {
        return [APPLICATION_VENDOR_DIR . '/spryker/spryker/Bundles/*/src/*/Zed/*/Persistence/Propel/Schema/'];
    }

}
