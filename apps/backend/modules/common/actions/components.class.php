<?php

/**
 * Created by JetBrains PhpStorm.
 * User: ngoctv1
 * Date: 5/6/14
 * Time: 6:08 PM
 * To change this template use File | Settings | File Templates.
 */
class commonComponents extends sfComponents
{

    public function executeNewUser($request) {
        $listUser = csdl_lylichhoivienTable::getNewUser(5)->fetchArray();
        if($listUser){
            $this->listUser = $listUser;
        }else{
            return sfView::NONE;
        }
    }

    public function executeVanBan($request) {
        $listVanBan = csdl_vanbanphapquyTable::getVanBan(5)->fetchArray();
        if($listVanBan){
            $this->listVanBan = $listVanBan;
        }else{
            return sfView::NONE;
        }
    }

    public function executeTaiLieu($request) {
        $listTaiLieu = csdl_tailieunghiepvuTable::getTaiLieu(5)->fetchArray();
        if($listTaiLieu){
            $this->listTaiLieu = $listTaiLieu;
        }else{
            return sfView::NONE;
        }
    }

    public function executeTacphammoi($request) {

    }

    public function executeLichcongtac($request){
        //Tinh ngay trong tuan
        $year = date('Y',time());
        $weekNumber = date("W");
        $week_start = new DateTime();
        $week_start->setISODate($year,$weekNumber);
        $this->mon = $week_start->format('d-m-Y');
        $this->tue=date('d-m-Y', strtotime($this->mon. ' + 1 days'));
        $this->wed=date('d-m-Y', strtotime($this->mon. ' + 2 days'));
        $this->thu=date('d-m-Y', strtotime($this->mon. ' + 3 days'));
        $this->fri=date('d-m-Y', strtotime($this->mon. ' + 4 days'));
        $this->sat=date('d-m-Y', strtotime($this->mon. ' + 5 days'));
        $this->sun=date('d-m-Y', strtotime($this->mon. ' + 6 days'));
        //View calendar
        $this->tdDefault= '<td width="50"><span class="text-normal center"></span></td><td><span class="title"></span></td><td width="140"><span class="text-normal"></span></td><td width="110"><span class="text-normal"></span></td><td width="80"><span class="text-normal"></span></td><td width="80"><span class="text-normal"></span></td>';
        $this->rowcount=1;
        $this->trValue="";
        $user = sfContext::getInstance()->getUser();
        //lay du lieu thu 2
        $result=csdl_lichcongtacTable::getCalendarByDay($user->getGuardUser()->getId(),$this->mon);
        if(count($result)>0){
            $this->rowmon=count($result);
            $i = 1;
            foreach( $result as $calendar){
                $temp='<td width="70">
                    <span class="text-normal center">[time]
                    </span></td>
                    <td width="140" style="line-height: 22px"><span class="title">[content]
                    </span></td>
                    <td width="140"><span class="text-normal">[localtion]
                    </span></td>
                    <td width="110"><span class="text-normal">[thanhphan]
                    </span></td>
                    <td width="80"><span class="text-normal">[chuanbi]
                    </span></td>
                    <td width="80"><span class="text-normal">[chutri]
                    </span></td>';
                if($i==1){
                    $temp=str_replace('[time]',date('H:i',strtotime($calendar->getStartTime())) .'-' . date('H:i',strtotime($calendar->getEndTime())),$temp);
                    $temp=str_replace('[content]',$calendar->getTieude(),$temp);
                    $temp=str_replace('[localtion]',$calendar->getDiadiem(),$temp);
                    $temp=str_replace('[thanhphan]',$calendar->getThanhphan(),$temp);
                    $temp=str_replace('[chuanbi]',$calendar->getChuanbi(),$temp);
                    $temp=str_replace('[chutri]',$calendar->getChutri(),$temp);
                    $this->tdmon=$temp;
                }else{
                    $temp='<tr>' . $temp . '</tr>';
                    $temp=str_replace('[time]',date('H:i',strtotime($calendar->getStartTime())) .'-' . date('H:i',strtotime($calendar->getEndTime())),$temp);
                    $temp=str_replace('[content]',$calendar->getTieude(),$temp);
                    $temp=str_replace('[localtion]',$calendar->getDiadiem(),$temp);
                    $temp=str_replace('[thanhphan]',$calendar->getThanhphan(),$temp);
                    $temp=str_replace('[chuanbi]',$calendar->getChuanbi(),$temp);
                    $temp=str_replace('[chutri]',$calendar->getChutri(),$temp);
                    $this->trmon .=$temp;

                }
                $i++;
            }
        }

        //lay du lieu thu 3
        $result=csdl_lichcongtacTable::getCalendarByDay($user->getGuardUser()->getId(),$this->tue);
        if(count($result)>0){
            $this->rowtue=count($result);
            $i = 1;
            foreach( $result as $calendar){
                $temp='<td width="70">
                    <span class="text-normal center">[time]
                    </span></td>
                    <td width="140" style="line-height: 22px"><span class="title">[content]
                    </span></td>
                    <td width="140"><span class="text-normal">[localtion]
                    </span></td>
                    <td width="110"><span class="text-normal">[thanhphan]
                    </span></td>
                    <td width="80"><span class="text-normal">[chuanbi]
                    </span></td>
                    <td width="80"><span class="text-normal">[chutri]
                    </span></td>';
                if($i==1){
                    $temp=str_replace('[time]',date('H:i',strtotime($calendar->getStartTime())) .'-' . date('H:i',strtotime($calendar->getEndTime())),$temp);
                    $temp=str_replace('[content]',$calendar->getTieude(),$temp);
                    $temp=str_replace('[localtion]',$calendar->getDiadiem(),$temp);
                    $temp=str_replace('[thanhphan]',$calendar->getThanhphan(),$temp);
                    $temp=str_replace('[chuanbi]',$calendar->getChuanbi(),$temp);
                    $temp=str_replace('[chutri]',$calendar->getChutri(),$temp);
                    $this->tdtue=$temp;
                }else{
                    $temp='<tr>' . $temp . '</tr>';
                    $temp=str_replace('[time]',date('H:i',strtotime($calendar->getStartTime())) .'-' . date('H:i',strtotime($calendar->getEndTime())),$temp);
                    $temp=str_replace('[content]',$calendar->getTieude(),$temp);
                    $temp=str_replace('[localtion]',$calendar->getDiadiem(),$temp);
                    $temp=str_replace('[thanhphan]',$calendar->getThanhphan(),$temp);
                    $temp=str_replace('[chuanbi]',$calendar->getChuanbi(),$temp);
                    $temp=str_replace('[chutri]',$calendar->getChutri(),$temp);
                    $this->trtue .=$temp;

                }
                $i++;
            }
        }

        //lay du lieu thu 4
        $result=csdl_lichcongtacTable::getCalendarByDay($user->getGuardUser()->getId(),$this->wed);
        if(count($result)>0){
            $this->rowwed=count($result);
            $i = 1;
            foreach( $result as $calendar){
                $temp='<td width="70">
                    <span class="text-normal center">[time]
                    </span></td>
                    <td width="140" style="line-height: 22px"><span class="title">[content]
                    </span></td>
                    <td width="140"><span class="text-normal">[localtion]
                    </span></td>
                    <td width="110"><span class="text-normal">[thanhphan]
                    </span></td>
                    <td width="80"><span class="text-normal">[chuanbi]
                    </span></td>
                    <td width="80"><span class="text-normal">[chutri]
                    </span></td>';
                if($i==1){
                    $temp=str_replace('[time]',date('H:i',strtotime($calendar->getStartTime())) .'-' . date('H:i',strtotime($calendar->getEndTime())),$temp);
                    $temp=str_replace('[content]',$calendar->getTieude(),$temp);
                    $temp=str_replace('[localtion]',$calendar->getDiadiem(),$temp);
                    $temp=str_replace('[thanhphan]',$calendar->getThanhphan(),$temp);
                    $temp=str_replace('[chuanbi]',$calendar->getChuanbi(),$temp);
                    $temp=str_replace('[chutri]',$calendar->getChutri(),$temp);
                    $this->tdwed=$temp;
                }else{
                    $temp='<tr>' . $temp . '</tr>';
                    $temp=str_replace('[time]',date('H:i',strtotime($calendar->getStartTime())) .'-' . date('H:i',strtotime($calendar->getEndTime())),$temp);
                    $temp=str_replace('[content]',$calendar->getTieude(),$temp);
                    $temp=str_replace('[localtion]',$calendar->getDiadiem(),$temp);
                    $temp=str_replace('[thanhphan]',$calendar->getThanhphan(),$temp);
                    $temp=str_replace('[chuanbi]',$calendar->getChuanbi(),$temp);
                    $temp=str_replace('[chutri]',$calendar->getChutri(),$temp);
                    $this->trwed .=$temp;

                }
                $i++;
            }
        }

        //lay du lieu thu 5
        $result=csdl_lichcongtacTable::getCalendarByDay($user->getGuardUser()->getId(),$this->thu);
        if(count($result)>0){
            $this->rowthu=count($result);
            $i = 1;
            foreach( $result as $calendar){
                $temp='<td width="70">
                    <span class="text-normal center">[time]
                    </span></td>
                    <td width="140" style="line-height: 22px"><span class="title">[content]
                    </span></td>
                    <td width="140"><span class="text-normal">[localtion]
                    </span></td>
                    <td width="110"><span class="text-normal">[thanhphan]
                    </span></td>
                    <td width="80"><span class="text-normal">[chuanbi]
                    </span></td>
                    <td width="80"><span class="text-normal">[chutri]
                    </span></td>';
                if($i==1){
                    $temp=str_replace('[time]',date('H:i',strtotime($calendar->getStartTime())) .'-' . date('H:i',strtotime($calendar->getEndTime())),$temp);
                    $temp=str_replace('[content]',$calendar->getTieude(),$temp);
                    $temp=str_replace('[localtion]',$calendar->getDiadiem(),$temp);
                    $temp=str_replace('[thanhphan]',$calendar->getThanhphan(),$temp);
                    $temp=str_replace('[chuanbi]',$calendar->getChuanbi(),$temp);
                    $temp=str_replace('[chutri]',$calendar->getChutri(),$temp);
                    $this->tdthu=$temp;
                }else{
                    $temp='<tr>' . $temp . '</tr>';
                    $temp=str_replace('[time]',date('H:i',strtotime($calendar->getStartTime())) .'-' . date('H:i',strtotime($calendar->getEndTime())),$temp);
                    $temp=str_replace('[content]',$calendar->getTieude(),$temp);
                    $temp=str_replace('[localtion]',$calendar->getDiadiem(),$temp);
                    $temp=str_replace('[thanhphan]',$calendar->getThanhphan(),$temp);
                    $temp=str_replace('[chuanbi]',$calendar->getChuanbi(),$temp);
                    $temp=str_replace('[chutri]',$calendar->getChutri(),$temp);
                    $this->trthu .=$temp;

                }
                $i++;
            }
        }

        //lay du lieu thu 6
        $result=csdl_lichcongtacTable::getCalendarByDay($user->getGuardUser()->getId(),$this->fri);
        if(count($result)>0){
            $this->rowfri=count($result);
            $i = 1;
            foreach( $result as $calendar){
                $temp='<td width="70">
                    <span class="text-normal center">[time]
                    </span></td>
                    <td width="140" style="line-height: 22px"><span class="title">[content]
                    </span></td>
                    <td width="140"><span class="text-normal">[localtion]
                    </span></td>
                    <td width="110"><span class="text-normal">[thanhphan]
                    </span></td>
                    <td width="80"><span class="text-normal">[chuanbi]
                    </span></td>
                    <td width="80"><span class="text-normal">[chutri]
                    </span></td>';
                if($i==1){
                    $temp=str_replace('[time]',date('H:i',strtotime($calendar->getStartTime())) .'-' . date('H:i',strtotime($calendar->getEndTime())),$temp);
                    $temp=str_replace('[content]',$calendar->getTieude(),$temp);
                    $temp=str_replace('[localtion]',$calendar->getDiadiem(),$temp);
                    $temp=str_replace('[thanhphan]',$calendar->getThanhphan(),$temp);
                    $temp=str_replace('[chuanbi]',$calendar->getChuanbi(),$temp);
                    $temp=str_replace('[chutri]',$calendar->getChutri(),$temp);
                    $this->tdfri=$temp;
                }else{
                    $temp='<tr>' . $temp . '</tr>';
                    $temp=str_replace('[time]',date('H:i',strtotime($calendar->getStartTime())) .'-' . date('H:i',strtotime($calendar->getEndTime())),$temp);
                    $temp=str_replace('[content]',$calendar->getTieude(),$temp);
                    $temp=str_replace('[localtion]',$calendar->getDiadiem(),$temp);
                    $temp=str_replace('[thanhphan]',$calendar->getThanhphan(),$temp);
                    $temp=str_replace('[chuanbi]',$calendar->getChuanbi(),$temp);
                    $temp=str_replace('[chutri]',$calendar->getChutri(),$temp);
                    $this->trfri .=$temp;

                }
                $i++;
            }
        }

        //lay du lieu thu 7
        $result=csdl_lichcongtacTable::getCalendarByDay($user->getGuardUser()->getId(),$this->sat);
        if(count($result)>0){
            $this->rowsat=count($result);
            $i = 1;
            foreach( $result as $calendar){
                $temp='<td width="70">
                    <span class="text-normal center">[time]
                    </span></td>
                    <td width="140" style="line-height: 22px"><span class="title">[content]
                    </span></td>
                    <td width="140"><span class="text-normal">[localtion]
                    </span></td>
                    <td width="110"><span class="text-normal">[thanhphan]
                    </span></td>
                    <td width="80"><span class="text-normal">[chuanbi]
                    </span></td>
                    <td width="80"><span class="text-normal">[chutri]
                    </span></td>';
                if($i==1){
                    $temp=str_replace('[time]',date('H:i',strtotime($calendar->getStartTime())) .'-' . date('H:i',strtotime($calendar->getEndTime())),$temp);
                    $temp=str_replace('[content]',$calendar->getTieude(),$temp);
                    $temp=str_replace('[localtion]',$calendar->getDiadiem(),$temp);
                    $temp=str_replace('[thanhphan]',$calendar->getThanhphan(),$temp);
                    $temp=str_replace('[chuanbi]',$calendar->getChuanbi(),$temp);
                    $temp=str_replace('[chutri]',$calendar->getChutri(),$temp);
                    $this->tdsat=$temp;
                }else{
                    $temp='<tr>' . $temp . '</tr>';
                    $temp=str_replace('[time]',date('H:i',strtotime($calendar->getStartTime())) .'-' . date('H:i',strtotime($calendar->getEndTime())),$temp);
                    $temp=str_replace('[content]',$calendar->getTieude(),$temp);
                    $temp=str_replace('[localtion]',$calendar->getDiadiem(),$temp);
                    $temp=str_replace('[thanhphan]',$calendar->getThanhphan(),$temp);
                    $temp=str_replace('[chuanbi]',$calendar->getChuanbi(),$temp);
                    $temp=str_replace('[chutri]',$calendar->getChutri(),$temp);
                    $this->trsat .=$temp;

                }
                $i++;
            }
        }

        //lay du lieu thu chu nhat
        $result=csdl_lichcongtacTable::getCalendarByDay($user->getGuardUser()->getId(),$this->sun);
        if(count($result)>0){
            $this->rowsun=count($result);
            $i = 1;
            foreach( $result as $calendar){
                $temp='<td width="70">
                    <span class="text-normal center">[time]
                    </span></td>
                    <td width="140" style="line-height: 22px"><span class="title">[content]
                    </span></td>
                    <td width="140"><span class="text-normal">[localtion]
                    </span></td>
                    <td width="110"><span class="text-normal">[thanhphan]
                    </span></td>
                    <td width="80"><span class="text-normal">[chuanbi]
                    </span></td>
                    <td width="80"><span class="text-normal">[chutri]
                    </span></td>';
                if($i==1){
                    $temp=str_replace('[time]',date('H:i',strtotime($calendar->getStartTime())) .'-' . date('H:i',strtotime($calendar->getEndTime())),$temp);
                    $temp=str_replace('[content]',$calendar->getTieude(),$temp);
                    $temp=str_replace('[localtion]',$calendar->getDiadiem(),$temp);
                    $temp=str_replace('[thanhphan]',$calendar->getThanhphan(),$temp);
                    $temp=str_replace('[chuanbi]',$calendar->getChuanbi(),$temp);
                    $temp=str_replace('[chutri]',$calendar->getChutri(),$temp);
                    $this->tdsun=$temp;
                }else{
                    $temp='<tr>' . $temp . '</tr>';
                    $temp=str_replace('[time]',date('H:i',strtotime($calendar->getStartTime())) .'-' . date('H:i',strtotime($calendar->getEndTime())),$temp);
                    $temp=str_replace('[content]',$calendar->getTieude(),$temp);
                    $temp=str_replace('[localtion]',$calendar->getDiadiem(),$temp);
                    $temp=str_replace('[thanhphan]',$calendar->getThanhphan(),$temp);
                    $temp=str_replace('[chuanbi]',$calendar->getChuanbi(),$temp);
                    $temp=str_replace('[chutri]',$calendar->getChutri(),$temp);
                    $this->trsun .=$temp;

                }
                $i++;
            }
        }
    }

}
