<?php

namespace App\View\Helper;

use Cake\View\Helper\HtmlHelper;

/**
 *
 * AouHelper for common paging,...
 * @author: Huynh
 */
class AouHelper extends HtmlHelper
{
    /**
     * To make common paging
     * @author Huynh
     * @param object $paginator Paginator Helper
     * @param array $option paging configuration
     * @return string
     */
    public function aouCommonPaging($paginator, $option)
    {
        $paginator->setTemplates([
            'nextActive' => '<a href="{{url}}" title="前へ">{{text}}</a>',
            'prevActive' => '<a href="{{url}}" title="次へ">{{text}}</a>',
            'nextDisabled' => '',
            'prevDisabled' => '',
        ]);
        $result = '<div class="pagination">';
        $result = $result . $paginator->prev('&laquo;', ['escape' => false]);
        $totalPage = $paginator->total();
        $result = $result . '';
        for ($p = 1; $p <= $totalPage; $p++) {
            if ($option['page'] != $p) {
                $url = $paginator->generateUrl([
                    'page' => $p
                ]);

                if (!empty($option['sort'])) {
                    $url = $paginator->generateUrl([
                        'sort' => $option['sort'],
                        'direction' => $option['direction'],
                        'page' => $p
                    ]);
                }
                $result = $result .
                    '<a href="' .
                    $url . '">' .
                    $p .
                    '</a>';
            } else {
                $result = $result .
                    '<a  class="active">' .
                    $p .
                    '</a>';
            }
        }
        $result = $result . $paginator->next('&raquo;', ['escape' => false]);
        $result = $result . '</div>';

        return $result;
    }

    /**
     * To make check version file css, js
     * @author Thuanle
     * @param string $filename not null
     * @return string
     */
    public function getVersion($filename)
    {
        if (file_exists(WWW_ROOT . $filename)) {
            return '/' . $filename . '?v=' . filemtime(WWW_ROOT . $filename);
        } else {
            return '/' . $filename;
        }
    }
}
