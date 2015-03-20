<h1>ReturnInsert (+1 overload)</h1>
<br />
<h2>Описание:</h2><hr />
<pre class="brush: csharp;">
Dictionary&lt;string, List&lt;string&gt;&gt; ReturnInsert ( string col, int val )
Dictionary&lt;string, List&lt;string&gt;&gt; ReturnInsert ( string col, string val )
</pre>
Возвращает подготовленный к добавлению в Базу данных <a href="https://msdn.microsoft.com/ru-ru/library/xfhwa508%28v=vs.110%29.aspx" target="_blank">ассоциативный массив</a> необходимых данных.<br />
<br />
<h2>Список параметров</h2><hr />
<br />
<h3 class="perem">col</h3><span class="paragraph">Поле, которому будет добавленны данные в Базе Данных</span>
<h3 class="perem">val</h3><span class="paragraph"><u>Согласно <a href="https://msdn.microsoft.com/ru-ru/library/vstudio/ms229029%28v=vs.100%29.aspx" target="_blank">перегрузке</a> переменная может быть как <b>текстовой</b>, так и <b>числовой</b>.</u></span><br /><span class="paragraph">Данная переменная указывает какими данными будет заполненно соответствующее поле в Базе Данных</span>
<br />
<h2>Пример:</h2><hr />
<pre class="brush: csharp;">
using KilleR.MySqli;

namespace ConsoleApplication1
{
    class Program
    {
        static void Main(string[] args)
        {
            MySqli Test = new MySqli("127.0.0.1", "root", "", "mysql");
            Dictionary&lt;string, List&lt;string&gt;&gt; tests = Test.ReturnInsert("test", "tests");
            Console.WriteLine(String.Join("&#59;&#92;n", tests["keys"].ToArray()));
            Console.ReadLine();
        }
    }
}
</pre>