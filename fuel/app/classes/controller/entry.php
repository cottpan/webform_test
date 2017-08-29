<?php

class Controller_Entry extends Controller
{

  private $fields = array('entry_name', 'entry_ruby', 'entry_birthday_year', 'entry_birthday_month', 'entry_birthday_day', 'entry_prefecture', 'entry_address',
  'entry_telephone_h', 'entry_telephone_m', 'entry_telephone_l', 'entry_email', 'entry_magazine', 'entry_magazine_type');
  
  private $select_year = array(
    "1950" => "1950", "1951" => "1951", "1952" => "1952", "1953" => "1953", "1954" => "1954",
    "1955" => "1955", "1956" => "1956", "1957" => "1957", "1958" => "1958", "1959" => "1959",
    "1960" => "1960", "1961" => "1961", "1962" => "1962", "1963" => "1963", "1964" => "1964",
    "1965" => "1965", "1966" => "1966", "1967" => "1967", "1968" => "1968", "1969" => "1969",
    "1970" => "1970", "1971" => "1971", "1972" => "1972", "1973" => "1973", "1974" => "1974",
    "1975" => "1975", "1976" => "1976", "1977" => "1977", "1978" => "1978", "1979" => "1979",
    "1980" => "1980", "1981" => "1981", "1982" => "1982", "1983" => "1983", "1984" => "1984",
    "1985" => "1985", "1986" => "1986", "1987" => "1987", "1988" => "1988", "1989" => "1989",
    "1990" => "1990", "1991" => "1991", "1992" => "1992", "1993" => "1993", "1994" => "1994",
    "1995" => "1995", "1996" => "1996", "1997" => "1997", "1998" => "1998", "1999" => "1999",
    "2000" => "2000", "2001" => "2001", "2002" => "2002", "2003" => "2003", "2004" => "2004",
    "2005" => "2005", "2006" => "2006", "2007" => "2007", "2008" => "2008", "2009" => "2009",
    "2010" => "2010", "2011" => "2011", "2012" => "2012", "2013" => "2013", "2014" => "2014",
    "2015" => "2015", "2016" => "2016", "2017" => "2017"
  );
  private $select_month = array(
    "1" => "1", "2" => "2", "3" => "3", "4" => "4", "5" => "5", "6" => "6",
    "7" => "7", "8" => "8", "9" => "9", "10" => "10", "11" => "11", "12" => "12"
  );
  private $select_day = array(
    "1" => "1", "2" => "2", "3" => "3", "4" => "4", "5" => "5", "6" => "6",
    "7" => "7", "8" => "8", "9" => "9", "10" => "10", "11" => "11", "12" => "12",
    "13" => "13", "14" => "14", "15" => "15", "16" => "16", "17" => "17", "18" => "18",
    "19" => "19", "20" => "20", "21" => "21", "22" => "22", "23" => "23", "24" => "24",
    "25" => "25", "26" => "26", "27" => "27", "28" => "28", "29" => "29", "30" => "30", "31" => "31"
  );

  public $PREFECTURE = array(
    "0" => "", "1" => "北海道", "2" => "青森県", "3" => "岩手県", "4" => "宮城県", "5" => "秋田県", "6" => "山形県",
    "7" => "福島県", "8" => "茨城県", "9" => "栃木県", "10" => "群馬県", "11" => "埼玉県", "12" => "千葉県", "13" => "東京都",
    "14" => "神奈川県", "15" => "新潟県", "16" => "富山県", "17" => "石川県", "18" => "福井県", "19" => "山梨県", "20" => "長野県",
    "21" => "岐阜県", "22" => "静岡県", "23" => "愛知県", "24" => "三重県", "25" => "滋賀県", "26" => "京都府", "27" => "大阪府",
    "28" => "兵庫県", "29" => "奈良県", "30" => "和歌山県", "31" => "鳥取県", "32" => "島根県", "33" => "岡山県", "34" => "広島県",
    "35" => "山口県", "36" => "徳島県", "37" => "香川県", "38" => "愛媛県", "39" => "高知県", "40" => "福岡県", "41" => "佐賀県",
    "42" => "長崎県", "43" => "熊本県", "44" => "大分県", "45" => "宮崎県", "46" => "鹿児島県", "47" => "沖縄県", "48" => "日本国外"
  );

  public function action_index()
  {
    $view = View::forge('common/layout');

    $view->set_global("sitename","Form test site");
    $view->head = View::forge('common/head',array("pagetitle"=>"エントリー"));
    $view->header = View::forge('common/header');
    $view->footer = View::forge('common/footer');


    if(Input::post('submit'))
    {
      foreach ($this->fields as $field)
      {
          Session::set_flash($field, Input::post($field));
      }
      
    }

    $val = Validation::forge();

    $val->add('entry_name', '名前')->add_rule('required');
    $val->add('entry_ruby', 'ふりがな')->add_rule('required');
    $val->add('entry_birthday_year', '年')->add_rule('required');
    $val->add('entry_birthday_month', '月')->add_rule('required');
    $val->add('entry_birthday_day', '日')->add_rule('required');
    $val->add_field('entry_birthday', '生年月日', 'valid_date[Y-m-d]');
    $val->add('entry_prefecture', '都道府県')->add_rule('required');
    $val->add_field('entry_address','ご住所','required');
    $val->add('entry_telephone_h', '電話番号上')->add_rule('required')->add_rule('valid_string', array('numeric'));
    $val->add_field('entry_telephone_m', '電話番号中', 'required|valid_string[numeric]');
    $val->add('entry_telephone_l', '電話番号下')->add_rule('required')->add_rule('valid_string', array('numeric'));
    $val->add('entry_email', 'メール')->add_rule('required')->add_rule('valid_email');
    //$val->add('msg', '内容')->add_rule('required');

    if($val->run() and Security::check_token())
    {
      //Response::redirect('/conf');
      foreach ($this->fields as $field)
      {
        $data[$field] = Session::get_flash($field);
        Session::keep_flash($field);
      }
      $view->contents = View::forge('form/conf', $data);
      return $view;
    }

    $data = array();

    $data['val'] = $val;
    $data['year'] = $this->select_year;
    $data['month'] = $this->select_month;
    $data['day'] = $this->select_day;
    $data['prefecture'] = $this->PREFECTURE;
    $view->contents = View::forge('form/form',$data);

    return $view;
  }

  public function action_conf()
  {
    $data = array();
    
    $view = View::forge('common/layout');

    $view->set_global("sitename","Form test site");
    $view->head = View::forge('common/head',array("pagetitle"=>"エントリー"));
    $view->header = View::forge('common/header');
    $view->footer = View::forge('common/footer');
    
    if(Input::post('submit'))
    {
      foreach ($this->fields as $field)
      {
          Session::set_flash($field, Input::post($field));
      }
      
    }
    
    foreach ($this->fields as $field)
    {
      $data[$field] = Session::get_flash($field);
      Session::keep_flash($field);
    }
    $view->contents = View::forge('form/conf', $data);
    
    return $view;
  }
}
