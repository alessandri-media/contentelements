<?php

namespace AlessandriMedia\Contentelements\Domain\Model;

use AlessandriMedia\Devlib\Utility\TtContent as UtilityTtContent;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2019 René Alessandri <rene@alessandri-media.ch>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 *
 *
 * @package contentelements
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 *
 */
class TtContent extends AbstractEntity
{

    /**
     * Gets gridelements backend layout from parent grid if available
     *
     * @return string
     */
    public function getParentGridelementsBackendLayout()
    {
        return UtilityTtContent::getParentGridelementsBackendLayout($this->getUid());
    }

    /**
     * Gets gridelements container
     *
     * @return int
     */
    public function getTxGridelementsContainer()
    {
        return $this->txGridelementsContainer;
    }

}
