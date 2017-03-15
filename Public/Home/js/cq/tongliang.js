(function (root, factory) {if (typeof define === 'function' && define.amd) {define(['exports', 'echarts'], factory);} else if (typeof exports === 'object' && typeof exports.nodeName !== 'string') {factory(exports, require('echarts'));} else {factory({}, root.echarts);}}(this, function (exports, echarts) {var log = function (msg) {if (typeof console !== 'undefined') {console && console.error && console.error(msg);}};if (!echarts) {log('ECharts is not Loaded');return;}if (!echarts.registerMap) {log('ECharts Map is not loaded');return;}echarts.registerMap('wangzhou', {"type":"FeatureCollection","features":[{"type":"Feature","id":"500151","properties":{"name":"铜梁区","cp":[106.054948,29.839944],"childNum":4},"geometry":{"type":"MultiPolygon","coordinates":[["@@@@@C@C@A@@@A@A@ABA@CDEBCBEDEBCBCBCBADA@@DEDCB@B@BAD@NDBBB@B@D@B@D@D@BADADCDAFCFADABAB@DADA@@FA@@DAD@BCBABC@AECGAWEGC@CAEBCBED@FBDFDDDBD@HAJAFBHBD@DBRBJBD@B@B@DAD@D@FBF@D@HBF@H@F@FAF@FAFAD@B@D@DA@@BA@CA@AAA@CAAAAA@C@A@A@ABAFEBCBACAAAACAC@C@E@ABCA@ACCACAAC@ABC@C@CACCCCACA@@@@B@@@BA@@@@B@@@@@@@B@BBB@B@B@DCBAB@BA@A@A@ABA@ABABADAD@B@D@BBDF@@B@B@BA@AAC@ACEEEAA@ADA@AAC@A@@B@D@D@B@DBBBB@BB@@@BBBBDABABCBCB@B@BB@D@BADAJIDCD@D@BA@AB@@ADADA@@BABAB@DBBB@@B@@@@@@@@@@@@@@A@@@@@@@@@@@@@@@@B@@@@@@@@@@@@@@B@@@@ABB@@@B@B@B@H@DBB@@@@BBB@D@BB@@BB@B@DCBAB@DBHBBBDDD@F@B@@B@D@BBBBB@@D@DABABAA@@@@@@AB@B@@A@@BA@A@@@@@A@@B@@B@@B@@@B@@AB@@@@@B@@B@B@@@@@B@@B@B@@@@@DCDA@A@A@IB@@A@AB@B@B@B@BB@BB@B@B@@@BA@A@AA@@ABA@@B@B@B@DBBBD@D@B@BAB@@A@AGE@@@AB@@@A@@A@@@@@@@@@@@@@@B@@@@@@@@A@@@@@@B@@@@@@@@B@A@@@@@@@A@@@@@@@@@@@@@@@@@@@@@@@@B@@@@@@@@@@@@@DB@A@@BAB@@ABAB@DC@ABBB@@A@@@@@ABADCB@D@B@@ABA@@@AB@BBB@B@@@B@B@B@BABA@A@CCEBCDAB@B@PPBBB@B@BA@@@AAA@GCI@CBC@C@AAEAA@AA@@@CDABABABA@@AA@@@A@AAA@@AA@@A@@@@BC@@D@@ADCBA@A@AAAA@A@@@CCAC@CCGAE@A@@JMEEIK@AACAAGGOOKMOMCCGGICCAGEIEECC@GACAGACAGEGCAAAAACACEEACA@A@A@EAAAGEAAAACAE@AA@@@CJIB@DABA@AACAGAI@E@AACAAAE@A@ABA@A@EAEAAAAAAAEAE@ACA@AA@@C@G@A@AB@D@B@DBBAB@@A@AFGDGBA@AACCGCAACAABAB@B@@A@A@C@@AAC@A@A@EIACAAC@CAA@A@CAECCAGG@ACCAAGECCAACKACA@CAA@@AAAAE@AAEAEAEEKAC@ADAB@@ABC@CAAAEAACC@CAC@E@AAAA@ACAEAKAIAEIQGMACA@A@A@A@CAAEAA@A@ABC@@BABA@@AA@@A@A@G@E@AAA@ACGGCGA@AAECC@C@I@CBCAIAGAIACAEBE@QCI@AAA@@A@AA@AEAAA@CAA@EBEBCB@@ADA@@@A@A@@@C@A@@B@B@D@@@@@@@BB@@B@@@@@BA@@BA@@B@@@@ABB@@@@B@@@BB@@BBB@B@BA@@BA@C@EBA@A@@A@A@AECEG@@@@ADABBBD@B@@B@@A@A@C@C@@B@DAB@@A@A@CCECCCC@C@C@A@EB@@C@@ABA@@@AA@@@CB@@CD@B@@@BB@BAB@@B@BB@ADAFADCBA@@@AACEAA@@A@@B@DAB@BA@EBA@CBA@A@@@@ABA@C@ABA@@@A@@CAKCICEAA@OBA@A@@@ABAB@BADA@ABABCD@BADBB@BBFFF@@ADA@@B@@@BBB@@CBCBA@@BE@A@A@@@ABDB@B@BA@A@A@A@C@A@@@ABHFFFBBB@B@DBB@BDBDBBB@D@B@@@DDFF@BFBB@@@@BBB@BBBBBBABBBBLPFFBBBDBB@@B@B@BB@@AB@@BBBJBDDDFJDB@@B@B@D@@@DDDFDDDBJJBBFDDDDHHNDJDFBFDJ@@B@HCDCHEDAB@B@BBBBBDFPBDBHDDBFFJPT@DJNBFJLBDBBDBBBDF@@ABKHCDCB@@@BDB@B@B@@BB@@@@@B@BAB@BAB@BA@@BBBBBBBAB@@ABCBC@A@A@@AAA@@A@A@@@A@@A@BA@A@@B@@@@@BA@@@@@@@@@@A@@@A@@A@@A@A@@A@AA@@@@@@A@@@@@@@C@C@A@C@CBCB@@@B@BB@BD@B@@ABABA@A@@@@B@BBD@B@D@D@BBBA@BBAB@@@@A@AB@@@B@@@B@B@@@B@BABAB@@A@@@A@@@@B@@@@B@@B@@C@AB@@@@@B@@@@AB@@A@AAA@AB@@ADA@@@A@@@A@A@@@CBA@C@A@AAAAAAAAAAA@@@E@C@EBCBC@EACA@@AA@@CBC@A@CC@A@@AA@BA@@@A@AB@@@BA@@BEBA@ABA@@BCDA@@@@@AA@@A@@@A@@@A@@@A@@@@@@B@@@@@B@@@@@BA@ABA@@@@@ABA@CAA@A@@@A@A@@BAACAK@CAA@@BA@@B@BAB@B@@@BDBDDBB@@ABEDAHABA@@@AAA@A@A@@@ABA@@@AAAA@ABA@C@A@AACECAA@@DADEB@B@@A@AAAEG@A@A@AAA@AA@C@E@GAA@AB@AA@@A@CB@@AB@@@@AA@CEAC@AACAACCAAA@EBG@E@E@EAC@E@UBC@E@C@@@CBA@GDA@@B@B@BBDB@@D@BCB@DABA@@BAACACAGAC@A@A@AB@B@DAFBD@FBD@BABB@@B@@A@@BA@A@ABA@@@@A@AA@@AA@ADA@@D@B@@A@@@CBCBABABA@CA@B@@@F@B@@@BAAA@@@CBA@@B@@@BA@A@ADBB@B@BAB@D@@AB@@AB@@AB@A@@CB@@@B@@DBDDFBBBBBAB@@DFDFBBBBDBB@B@DBDBBBB@DA@@B@B@B@BBBD@@BBAF@BBHBFHHFFFH@@@B@B@BFTDJ@FBH@D@@BB@@B@DADADCBAD@B@B@B@BB@BB@@DAF@BDFHJBBBBB@D@@@B@B@@ABBD@B@BB@@B@B@B@@@BABAB@BA@A@A@@B@@A@@B@B@B@B@@@B@@@B@@@BB@BB@@BB@@BBBBB@BBAB@BA@CAC@AACBA@AB@B@B@@BBB@BBBHAFCNEDA@@@@B@D@B@B@@A@@A@@AA@@A@@@@B@@@@@B@B@B@@@BA@@@@B@@@B@B@@@@AB@@A@@B@AA@@@A@@@@@A@@@@@A@@@A@@@A@@@@@G@@BADADAB@F@B@B@B@D@@@BBB@BBB@@BB@@BBB@@BBBBAB@B@BABAB@@A@A@DDDF@BBDDFFDDBB@F@FBBB@DBJDHBFBBCFCBEDKR@@@DABCBABC@ABAD@B@@DAD@B@@@B@@BBBDDDB@BBB@BCHCFAD@@A@AAA@CB@B@DBDBBBB@@@BABCBA@E@A@A@A@ABB@@BBDABADCBA@A@A@EEC@A@A@@@A@A@@B@@@D@B@@@BBB@B@@@B@@@BA@@@A@ABA@A@@B@B@B@D@BBD@BBDBBBDBDBBBBBBBB@BB@AB@@@B@@A@C@C@C@ABC@CBAB@BABABSHEDAB@@C@E@A@CBC@CAE@CAC@ABAD@DBB@DDDBFBFDDBBBD@B@@ABA@ADCBAB@BBDBDBF@BBBAB@BAB@@BB@@BBB@B@BAB@B@@@@BB@@B@@BA@@B@@@BB@B@@BB@@B@B@B@@AB@@A@@D@@@BA@ABA@@B@BB@@@B@BB@B@@@@@BA@@@@BAD@@@B@@@BBAB@B@@@B@BBB@BBB@BB@@B@BABEDEDAD@DFBHBB@DL@BAB@@C@ABA@@B@@ABA@@@@B@@BBBBBBBB@B@BBB@@DB@@B@@B@@AB@@BBBD@@BBB@B@@ABBB@@B@@D@DBB@B@@@@ABABAB@BAB@@B@@@@BBD@DADAB@DABA@@@A@A@@@A@ABC@CDCDADADABABC@AAACAEAAA@CDEFAF@FAD@D@B@BB@J@BDDHB@B@BAF@BDBF@DAD@DCD@BABA@C@A@C@@@AB@@@@AB@@A@@B@@A@@@A@AB@DAB@BB@A"],["@@BA@@A@@@@@@@@@BAA@@@@B@@@@@@@@@@@@@@@@@@@@@@@@A@BB@@"],["@@DA@@B@@AB@@@CA@@@@@@@@@@@@@@A@@@@@@@@@@B@@B@@@@@@BA@@@@@@@@A@@@B@@@@@@A@@@@@@@@@@@@B@@@@@@"],["@@@A@B@@@@@@@@@@@@B@@@@@@@@@A@"]],"encodeOffsets":[[[108525,30783]],[[108714,30641]],[[108789,30631]],[[108795,30627]]]}}],"UTF8Encoding":true});}));