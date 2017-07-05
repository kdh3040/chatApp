<?
/**
 *
 */
class Test
{
  public $IsMember;
  public $Name;
  public $Age;
  public $ImgUrl;

  function __construct()
  {
    $this->IsMember = array("1", "0", "1", "1");
    $this->Name = array("침착맨", "풍월량", "설현", "콩");
    $this->Age =  array("33", "144", "422","22");
    $this->ImgUrl = array("http://imgnews.naver.com/image/442/2016/12/05/i15362628932_99_20161205174605.jpg",
    "http://cafefiles.naver.net/20120601_296/qkfka10136_1338506808108tgnEa_JPEG/i1772751874.jpeg",
    "http://imgnews.naver.com/image/008/2017/02/17/2017021711094626350_1_99_20170217112804.jpg",
  "http://imgnews.naver.com/image/030/2013/04/24/h_59_20130424141245.jpg");
  }
  function __destruct()
  {
    //echo "소멸됨";
  }

  public function IsMember($idx)
  {
    return $this->IsMember[$idx];
  }

  public function Name($idx)
  {
    return $this->Name[$idx];
  }

  public function Age($idx)
  {
    return $this->Age[$idx];
  }

  public function Photo($idx)
  {
    return $this->ImgUrl[$idx];
  }
}


?>
