<h1>ReturnUpdate (+1 overload)</h1>
<br />
<h2>Описание:</h2><hr />
<pre class="brush: csharp;">
List&lt;string&gt; ReturnUpdate ( string col, int val )
List&lt;string&gt; ReturnUpdate ( string col, string val )
</pre>
Возвращает подготовленный к выбору из Базы данных <a href="https://msdn.microsoft.com/ru-ru/library/6sh2ey19(v=vs.110).aspx" target="_blank">список</a> необходимых условий выбора.<br />
<br />
<h2>Список параметров</h2><hr />
<br />
<h3 class="perem">col</h3><span class="paragraph">Поле, которое будет обновленно Базы Данных</span>
<h3 class="perem">val</h3><span class="paragraph"><u>Согласно <a href="https://msdn.microsoft.com/ru-ru/library/vstudio/ms229029%28v=vs.100%29.aspx" target="_blank">перегрузке</a> переменная может быть как <b>текстовой</b>, так и <b>числовой</b>.</u></span><br /><span class="paragraph">Данная переменная указывает какими данными будет обновленны данные в Базе Данных</span>
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
            List&lt;string&gt; = Test.ReturnUpdate("test");
            Console.WriteLine(String.Join("&#59;&#92;n", tests.ToArray()));
            Console.ReadLine();
        }
    }
}
</pre>