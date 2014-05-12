<?php
/**
 * This file is part of PHPWord - A pure PHP library for reading and writing
 * word processing documents.
 *
 * PHPWord is free software distributed under the terms of the GNU Lesser
 * General Public License version 3 as published by the Free Software Foundation.
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code. For the full list of
 * contributors, visit https://github.com/PHPOffice/PHPWord/contributors.
 *
 * @link        https://github.com/PHPOffice/PHPWord
 * @copyright   2010-2014 PHPWord contributors
 * @license     http://www.gnu.org/licenses/lgpl.txt LGPL version 3
 */

namespace PhpOffice\PhpWord\Writer\RTF\Element;

use PhpOffice\PhpWord\Shared\String;

/**
 * TextBreak element RTF writer
 *
 * @since 0.10.0
 */
class Title extends AbstractElement
{
    /**
     * Write element
     *
     * @return string
     */
    public function write()
    {
        if (!$this->element instanceof \PhpOffice\PhpWord\Element\Title) {
            return;
        }

        $content = '';

        $content .= '\pard\nowidctlpar';
        $content .= String::toUnicode($this->element->getText());
        $content .= '\par' . PHP_EOL;

        return $content;
    }
}
