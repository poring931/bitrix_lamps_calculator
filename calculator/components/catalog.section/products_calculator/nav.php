<?
$res .= '<div class="'.$StyleText.'">'.$title.' ';
		if($this->bDescPageNumbering === true)
		{
			/*$makeweight = ($this->NavRecordCount % $this->NavPageSize);
			$NavFirstRecordShow = 0;
			if($this->NavPageNomer != $this->NavPageCount)
				$NavFirstRecordShow += $makeweight;

			$NavFirstRecordShow += ($this->NavPageCount - $this->NavPageNomer) * $this->NavPageSize + 1;

			if ($this->NavPageCount == 1)
				$NavLastRecordShow = $this->NavRecordCount;
			else
				$NavLastRecordShow = $makeweight + ($this->NavPageCount - $this->NavPageNomer + 1) * $this->NavPageSize;

			$res .= $NavFirstRecordShow;
			$res .= ' - '.$NavLastRecordShow;
			$res .= ' '.GetMessage("nav_of").' ';
			$res .= $this->NavRecordCount;
			$res .= "\n<br>\n</font>";

			$res .= '<font class="'.$StyleText.'">';

			if($this->NavPageNomer < $this->NavPageCount)
				$res .= '<a href="'.$sUrlPath.'?PAGEN_'.$this->NavNum.'='.$this->NavPageCount.$strNavQueryString.'#nav_start'.$add_anchor.'">'.$sBegin.'</a>&nbsp;|&nbsp;<a href="'.$sUrlPath.'?PAGEN_'.$this->NavNum.'='.($this->NavPageNomer+1).$strNavQueryString.'#nav_start'.$add_anchor.'">'.$sPrev.'</a>';
			else
				$res .= $sBegin.'&nbsp;|&nbsp;'.$sPrev;

			$res .= '&nbsp;|&nbsp;';

			$NavRecordGroup = $nStartPage;
			while($NavRecordGroup >= $nEndPage)
			{
				$NavRecordGroupPrint = $this->NavPageCount - $NavRecordGroup + 1;
				if($NavRecordGroup == $this->NavPageNomer)
					$res .= '<b>'.$NavRecordGroupPrint.'</b>&nbsp';
				else
					$res .= '<a href="'.$sUrlPath.'?PAGEN_'.$this->NavNum.'='.$NavRecordGroup.$strNavQueryString.'#nav_start'.$add_anchor.'">'.$NavRecordGroupPrint.'</a>&nbsp;';
				$NavRecordGroup--;
			}
			$res .= '|&nbsp;';
			if($this->NavPageNomer > 1)
				$res .= '<a href="'.$sUrlPath.'?PAGEN_'.$this->NavNum.'='.($this->NavPageNomer-1).$strNavQueryString.'#nav_start'.$add_anchor.'">'.$sNext.'</a>&nbsp;|&nbsp;<a href="'.$sUrlPath.'?PAGEN_'.$this->NavNum.'=1'.$strNavQueryString.'#nav_start'.$add_anchor.'">'.$sEnd.'</a>&nbsp;';
			else
				$res .= $sNext.'&nbsp;|&nbsp;'.$sEnd.'&nbsp;';*/
		}
		else
		{
			/*$res .= ($this->NavPageNomer-1)*$this->NavPageSize+1;
			$res .= ' - ';
			if($this->NavPageNomer != $this->NavPageCount)
				$res .= $this->NavPageNomer * $this->NavPageSize;
			else
				$res .= $this->NavRecordCount;
			$res .= ' '.GetMessage("nav_of").' ';
			$res .= $this->NavRecordCount;*/
			$res .= "</div>";

			$res .= '<div class="navs">';

			if($this->NavPageNomer > 1){
				if(($this->NavPageNomer-1)==1)
					$res .= '<a class="st" href="'.$sUrlPath.'">';
				else
					$res .= '<a class="st" href="'.$sUrlPath.'?PAGEN_'.$this->NavNum.'='.($this->NavPageNomer-1).$strNavQueryString.'">';
				$res .= '<svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 9L1 5L5 1" stroke="#000033"/></svg></a>';
			}
			else
				$res .= '';

			$res .= '';

			$NavRecordGroup = $nStartPage;
			while($NavRecordGroup <= $nEndPage)
			{
				if($NavRecordGroup == $this->NavPageNomer)
					$res .= '<b>'.$NavRecordGroup.'</b>';
				else{
					if($NavRecordGroup==1)
						$res .= '<a class="number" href="'.$sUrlPath.'">'.$NavRecordGroup.'</a>';
					else
						$res .= '<a class="number" href="'.$sUrlPath.'?PAGEN_'.$this->NavNum.'='.$NavRecordGroup.$strNavQueryString.'">'.$NavRecordGroup.'</a>';
				}
				$NavRecordGroup++;
			}
			$res .= '';
			if($this->NavPageNomer < $this->NavPageCount)
				$res .= '<a class="st" href="'.$sUrlPath.'?PAGEN_'.$this->NavNum.'='.($this->NavPageNomer+1).$strNavQueryString.'"><svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L5 5L1 9" stroke="#000033"/></svg></a>';
			else
				$res .= '';
		}

		if($this->bShowAll)
			$res .= $this->NavShowAll? '<a class="st" href="'.$sUrlPath.'?SHOWALL_'.$this->NavNum.'=0'.$strNavQueryString.'"><svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L5 5L1 9" stroke="#000033"/></svg><svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 9L1 5L5 1" stroke="#000033"/></svg></a>' : '<a class="st" href="'.$sUrlPath.'?SHOWALL_'.$this->NavNum.'=1'.$strNavQueryString.'">'.$sAll.'</a>';

		$res .= '</div>';
		echo $res;