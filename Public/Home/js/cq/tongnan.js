(function (root, factory) {if (typeof define === 'function' && define.amd) {define(['exports', 'echarts'], factory);} else if (typeof exports === 'object' && typeof exports.nodeName !== 'string') {factory(exports, require('echarts'));} else {factory({}, root.echarts);}}(this, function (exports, echarts) {var log = function (msg) {if (typeof console !== 'undefined') {console && console.error && console.error(msg);}};if (!echarts) {log('ECharts is not Loaded');return;}if (!echarts.registerMap) {log('ECharts Map is not loaded');return;}echarts.registerMap('wangzhou', {"type":"FeatureCollection","features":[{"type":"Feature","id":"500152","properties":{"name":"潼南区","cp":[105.841818,30.189554],"childNum":3},"geometry":{"type":"MultiPolygon","coordinates":[["@@@@BC@CBA@@@@BABABEBCDCBABEBC@A@AAG@AA@CACCCAAA@C@ABCB@BABAACACACACBEDADADCBAAAEEGCEE@AAEAA@@@@ABA@A@@@A@A@@BA@@BA@A@@A@ABGBEBEBGDEDAB@H@F@@@B@@@@@@@@@@@@@@@@@@@@ACCCE@A@ABCJAHAD@FBFBBBB@@ADADAFAD@BABABCDA@C@C@AAEAAA@AAECAAC@CAEAC@A@@@AACC@@CAEECCAEAA@C@E@CCEAAJAN@DABA@CDEDCB@DBB@B@@C@A@E@C@CDCDCDADADABCDAFG@C@AA@GACCGIEEECEC@AAACCECCAC@GBIFGDAB@BADABA@ECAC@CDEDGFCDABADC@ABABADABABA@A@C@CAAA@C@E@AACAAAAC@C@ABC@CBABABC@@DA@AFADADCB@@A@@@A@@D@D@B@B@BA@@BCBA@AAA@ACE@AA@@A@@AAB@@CDCBCBABAACA@AAAAACACCACAC@AACA@A@ABAFGBA@AAACCEA@AAAAAAC@A@AACBCBABCDCBC@CACCCAEAA@A@BAAA@CBA@@B@B@@@BA@@@@BA@@B@@A@@B@@@D@B@DABABC@CDC@CBE@CA@ABE@A@AGACC@A@IAAA@C@C@EBE@EBCF@DBBFBDBBB@BADABCBCBCBCD@DAD@B@B@@@B@B@@ABCBA@CBCBC@AA@@@@@AA@ABA@ABAB@B@@A@A@CAC@@@@AA@AA@BA@A@AA@@ACAA@@BA@@@AA@@@CA@@AA@A@AAAAAAAAA@@@A@@B@BA@@@AB@BAD@@@BA@ACKA@GAEA@CBCFCFCBA@A@AA@@AAA@AAA@A@A@@@ABAAA@@A@@@C@AB@@@@AB@@@@A@A@@A@A@@AAA@@@AB@BAB@@C@@@@BA@@BA@A@A@@@AA@@@AAA@@A@@@AB@@@AA@@A@@A@A@ABA@A@AA@@AA@@BA@ABAAA@AAEACAC@ABADABCB@BA@@@AACAACCAEAECC@CAA@CBCBAD@DBF@DBD@DAB@F@D@@@BAFCTGBABA@ABADAD@BAD@D@D@B@@@@A@@BAA@@AAAAAAAAAACACAAAC@AAC@A@C@A@A@AB@B@BAB@@@B@@A@@@A@@@AAA@A@@@A@C@@@AB@B@@@B@B@D@FFB@B@B@DABCBAAC@AA@BAB@B@B@F@B@DABA@A@@AAAAAC@C@ADAB@BBB@@@BCDEDG@AAA@ACACCAA@AA@@@A@C@CB@@@ABCBAD@BADABA@C@@LQFCDADEAAAECGAI@CAAEAE@A@CAECCEAC@ACECCB@B@@@BABA@A@ABAAAAA@@AA@AA@@AA@AAA@AA@@C@A@A@A@E@A@CBCBAB@@@H@@@@@B@@@B@@@B@@@@@B@@@@@B@@BBA@@@@BA@@B@@A@A@@@A@@@@@AB@@A@A@A@@@@@A@@@@@@BB@@BB@@@@BA@A@C@A@@@@@CBMFEDGBAA@AAA@AA@A@A@@BABBD@BBD@DABA@AB@AAAAA@AA@@AA@@AAA@@A@@@A@@@A@A@A@A@@@@BA@@@@B@BABA@ABAB@@A@A@A@@@AAA@C@AA@BA@A@@@C@A@AAAAGICE@ABE@CA@@AAAA@A@A@C@ABCDCBCBA@@@AA@@@CAG@ECIES@A@A@A@@EGEEGGAEAG@ABEAA@@ACAAA@A@A@@@CBA@AACACAA@A@CAAAAACECE@@BAAAAAEACCCA@@@A@@DA@A@A@@CG@@@ABAAA@AA@A@AB@@AACC@AAAA@AAACAAC@@@EDEDEBID@@A@@AC@@B@BA@A@@@CCAAAAA@GAAAEAAAICACA@C@C@@A@@@AA@ABEB@@C@@@CB@@@BBDBD@BFDBDDHBBBD@DBBFDDBBBDDBB@@D@B@BB@B@@@DA@AB@@AJEFADA@@@A@@@A@@@@@A@@B@@BB@DBB@@BDBB@BBBBBFBB@@@@AB@B@BD@BBF@FAH@D@@@@A@CB@BA@@@ADD@B@BBBB@@@BA@ABCB@@@@AD@BBB@BBB@@@@@B@B@@AB@D@DBB@BA@@B@@BB@@@BB@@@AB@BCDA@@@B@BB@@B@B@@A@@@BB@@@@B@@BBB@@B@@CBEDA@CAC@I@G@@@@BA@@@A@A@ABAB@BAB@@ABCBAB@BBB@BB@D@BBBBAB@D@D@BA@A@@@A@@BBB@@ABEFEFEFAB@@@BBBDBDD@@BAB@DBD@BBBBAF@@@BD@D@BB@B@B@B@BC@@@@BBB@@AB@BB@DDBD@@AB@B@@@BB@F@B@@BDDDD@@BBB@@BCR@@ABAB@FADA@AB@@AB@BBJ@B@B@B@BD@BBBB@BBD@@@B@B@@@D@@B@@@@@B@B@@@@@@D@@@@@@AA@@@B@@@@BD@B@@B@BBB@BAB@@B@BB@@@@B@@B@BA@@@@B@@DBB@@@@B@@@BABBB@@@AA@@B@@@B@B@@@@B@@@BBD@@@@@DA@@BCB@B@@B@B@F@@@@@@@@BB@@@@B@B@B@@@B@@@BDB@@@BA@ABA@@B@@BBABC@CDCBAB@B@@DBBBBB@B@BADCAE@CACAEGCAA@E@A@AD@D@BAD@DADCDADABA@A@CACCAACA@AE@EAA@CBCD@BAD@B@BA@AAACCAA@CBCBCAAAAA@B@D@DADADAFAD@BA@EBA@CD@D@B@@BB@D@FAB@DABADABC@CAGECAEAA@CBCBABAB@DAB@BA@EBGACAABC@@BAD@J@JAD@DAD@BBBDBDF@BBBABA@EBCAE@CBCB@@BBCB@BA@A@A@AACAA@A@A@CBCDABEBC@A@ABA@CAE@G@ABCBGHINCB@@ABAH@@B@@@@BA@@BAB@@A@@@@@@AMBBBABA@CBAB@BBBDBH@D@DBBBBDBBDBJBFBDHBJ@BBD@D@@A@@@C@A@@BCB@BA@A@CAA@@@@BABA@@@A@A@A@@@A@CE@@@@A@@@A@AD@@@@G@A@@@AACC@AA@@@CA@@AA@@ACA@@@A@AAA@@@AA@@@@@A@CACAC@@A@A@GDE@AB@BDDBB@B@DAB@@AC@AAAA@@@@@ABA@@@A@AA@AA@ABA@CB@@A@@@@BBB@B@@ABB@BB@DAD@B@B@B@DDBBDFDBDBDBDBDBDB@@A@AD@B@B@FDFBFDB@DAF@DABA@@DA@EBCDAJAFBFDJLJDFADCFCF@DA@@DBB@DBBBBBBBBBBB@BD@H@FAHAF@RDDD@DBF@D@@AF@F@D@DBBBBBBBBF@B@D@FABAD@BDDDAB@BABADCD@BCB@DC@A@EACA@@KAEBA@CBMLAFCDCDC@CBA@@B@@A@@B@@@@@B@@@@BBA@@@@@@B@@@@@BB@@@BB@@BB@@@@@@@@@@AB@@@@@@@@AB@@@@BD@D@BAD@BABC@G@CB@B@DBBRJ@@BB@HABBD@DBDBBDB@@B@F@BABABA@AFBD@F@D@D@D@B@BAFEBAB@@@D@B@B@B@BABABA@AD@B@BBB@BBB@@ABA@A@A@@@CBA@C@ABA@ABADADBD@D@D@BADBB@DBDB@@@@B@@@@@@@@@@@B@@@@@B@@@@@@@@@@BB@@@@@@@B@@B@@@@B@@@@@@@@@B@@@@@B@@@@@B@@@@@B@@@@@B@@@@@B@@B@@B@@AB@@AB@@@@@B@@@@B@@@@@@B@@@@@@@@@B@@A@@@@B@@@@@@@B@@@@@B@@@@@@@@@@@@@BA@@@@@@@@@@BB@@@@@@BB@@@@@@@@BA@@@@B@B@@A@@@@@@@@@@@A@@AA@@@@@A@@@@B@@@@@B@@@@@B@B@@@@@B@@@B@@@@B@A@@@@@@@@@ADBBBBB@DABAFAB@B@BBBBBD@DCFEDAF@@B@BABCBADABBBHLBD@B@BA@ABAAC@ABA@A@@@@@AAA@CAA@A@@@A@AB@@@@AB@BA@@B@B@B@@@BA@@@AA@AA@@@A@A@A@@B@@AB@@@BB@@BB@@@B@@B@@@@AB@@@@@BAB@BAF@D@BB@DB@B@BABC@CBCB@BBBDBDAD@D@B@@@@@BJ@@ABCBCDCD@DBDDJBBD@B@BAD@@@DAB@@AB@BA@@@A@@@AB@DA@@B@BDBBB@@BB@B@B@DABAD@B@@B@B@@@@ABADCDEJAB@BADBBBBFBFBF@DBD@D@FDDB@@BBBD@DABADAFADADBFBDFBFDBDDBBBBDB@BDDBBBBB@B@B@BABABCBGDABA@@B@@@B@@A@@@B@@@@@@@@BB@B@BBB@BB@@B@@@@@@@A@@@@@@@@@A@@@A@@@@@@@@@@@@B@@@@@@@@@@@B@@@@@@B@@@@BB@@@@B@@@B@@B@@@@@@@@B@@@@@@@B@@@@@@@@@@@BA@@@@B@@@@@@B@BB@@@@@B@@@@B@@B@@@B@@B@@B@@B@@B@@@@@@B@@@@@B@B@B@D@F@DAD@FDFDFHBDDFBF@DADABABABBDBBDBBBDADAD@DBDBFDDBBBFDFBDBFAFADCBCBADC@C@AB@BAAC@ABA@A@A@ADAB@@ABA@@FCD@DCD@@A@AA@CAACCC@CAC@A@EDABABADABAD@D@BBDB@BAB@D@DDBDDHDBBDB@@@DABBB@@B@BCBABADBD@DBB@B@AAACAACA@AAA@@D@D@B@B@@A@AAAAAAA@C@CBC@ABADCB@BADBB@BBBDBBB@BBB@BB@BABABIBABCA@BA@@DBB@BDBD@B@BA@CBABAB@B@@@BD@B@B@D@@@BBBB@@@DAB@F@DBD@BA@ABA@A@AB@B@@B@D@DBBB@BC@ABCAC@CAAA@A@A@E@AA@AAA@A@ABCBABCBA@@DBBBBDB@DBD@FBBDBBDBB@@ABABAB@DABA@A@C@ABA@AD@DABAFAD@DAB@DABAB@@ACAAA@ABCBA@@BADBD@FBDBF@F@DBFDD@DBB@BBB@B@BAB@AC@A@A@CB@D@D@DBB@"],["@@HK@A@A@@CCA@A@@BA@AH@B@@@BDF"],["@@@@AA@@@@AAB@@@@@@@B@@@@@B@@B@@@AB@@@BGABC@C@C@C@CBBF@DNA"]],"encodeOffsets":[[[108522,31103]],[[108091,30921]],[[108115,30853]]]}}],"UTF8Encoding":true});}));