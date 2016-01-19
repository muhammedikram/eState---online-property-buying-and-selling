<?php

class PaginationHelper {
	
	public static function calculatePaginationValues($page, $amountperPage = 10, $amountOfPagesToShow = 5, $model = '\Models\PromoParts') {
        //work out the maximum amount of pages that are valid.
        $page = intval($page);
        //amount per page has to be odd, i.e so the current page is the middle.
        //also we want to have an upper bound for this number, obivously the lower bound is 1.
        $amountOfPagesToShow = ($amountOfPagesToShow % 2 == 0) ? 5 
            : (($amountOfPagesToShow <= 11 && $amountOfPagesToShow >= 1) ? $amountOfPagesToShow : 5); 
        $amountEitherSide = ($amountOfPagesToShow > 1) 
            ? (($amountOfPagesToShow - 1/* the current page */) / 2)
            : 0;
        $totalPadding = $amountEitherSide * 2;

        $total = intval($model::count());
        $remainder = $total % $amountperPage;
        $amountOfPages = (($total - $remainder) / $amountperPage) + (($remainder > 0) ? 1 : 0);

        //work out the start and finish indexs for the items in the search.
        $startIndex = ($page > 1) ? (($page * $amountperPage) - ($amountperPage - 1)) : 1;
        $endIndex = (($page * $amountperPage) > $total) ? $total : ($page * $amountperPage);

        //work out the previous/next and current values.
        $next = (($page + 1) > $amountOfPages) ? $amountOfPages : $page + 1;
        $previous = (($page - 1) > 0) ? $page - 1 : 1; 

         $previousNos = array(); $nextNo = array();
        if(($amountEitherSide > 0)) {
            //determine previous side.
            $nPage = $page; $pPage = $page;
            for($i = $amountEitherSide; $i > 0; $i--) {
                if(($pPage - 1) > 0) {
                    $pPage--;
                    $previousNos[] = $pPage;
                }
                if(($nPage + 1) <= $amountOfPages) {
                    $nPage++;
                    $nextNo[] = $nPage;
                }
            }
        }

        if(($totalPadding > 0) && (count($previousNos) < $amountEitherSide) && count($nextNo) > 0/* if we have a next page. */) {
            //pad the next side.
            $nPage = $nextNo[count($nextNo) - 1];
            for($i = count($nextNo); $i < $totalPadding; $i++) {
                if(($nPage + 1) < $amountOfPages) {
                    $nPage++;
                    $nextNo[] = $nPage;
                }
            }
        }

        if(($totalPadding > 0) && (count($nextNo) < $amountEitherSide) && count($previousNos) > 0 /* if we have a previous side. */) {
            //pad the previous side.
            $pPage = $previousNos[count($previousNos) - 1];
            for($i = count($previousNos); $i < $totalPadding; $i++) {
                if(($pPage - 1) > 0) {
                    $pPage--;
                    $previousNos[] = $pPage;
                }
            }
        }

        //merge the pages into single array
        $nextPages = array_merge(array_reverse($previousNos), array($page), $nextNo);

        return array(
            'totalProducts' => $total, 
            'amountOfPages' => $amountOfPages, 
            'pageIsValid' => ($page <= $amountOfPages && $page > 0),
            'next' => $next,
            'previous' => $previous,
            'current' => $page,
            'last' => $amountOfPages,
            'first' => 1,
            'nextPages' => $nextPages,
            'amountOfPagesToShow' => $amountOfPagesToShow,
            'startIndex' => $startIndex,
            'endIndex' => $endIndex
        );
    } 

}