<h1>PrepareWhere (+1 overload)</h1>
<br />
<h2>Описание:</h2><hr />
<pre class="brush: csharp;">
void PrepareWhere ( string col, int val )
void PrepareWhere ( string col, string val )
</pre>
Подготавливает условие отбора данных в Базы данных согласно введённым значениям.<br />
<br />
<h2>Список параметров</h2><hr />
<br />
<h3 class="perem">col</h3><span class="paragraph">Поле, согласно которому будет идти сравнение Базы Данных</span>
<h3 class="perem">val</h3><span class="paragraph"><u>Согласно <a href="https://msdn.microsoft.com/ru-ru/library/vstudio/ms229029%28v=vs.100%29.aspx" target="_blank">перегрузке</a> переменная может быть как <b>текстовой</b>, так и <b>числовой</b>.</u></span><br />
<span class="paragraph">Данная переменная указывает с какими данными будет происходить сравнение в Базы Данных</span><br />
<span class="paragraph"><b>Примечание</b>&nbsp&nbsp;Если необходимо выполнить "неточное" сравнение, например, произвести поиск значения: Используется знаки процента(%)</span>
<h2>Не точный поиск</h2><hr />
<span class="paragraph">Если искомая фраза в начале строки:</span>
<pre class="brush: csharp;">
    Test.PrepareWhere("test", "искомая_строка%");
</pre>
<span class="paragraph">Если искомая фраза в конце строки:</span>
<pre class="brush: csharp;">
    Test.PrepareWhere("test", "%искомая_строка");
</pre>
<span class="paragraph">Если искомая фраза где-то в строке:</span>
<pre class="brush: csharp;">
    Test.PrepareWhere("test", "%искомая_строка%");
</pre>
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
            Test.PrepareSelect("test");
            Test.PrepareWhere("test", 11);
            Dictionary&lt;int, Dictionary&lt;string, string&gt;&gt; vals = Test.Select("test");
            foreach (KeyValuePair&lt;int, Dictionary&lt;string, string&gt;&gt; datas in vals) {
                foreach (KeyValuePair&lt;string, string&gt; data in datas.Value) {
                    Console.WriteLine(data.Key + " = " + data.Value);
                }
            }
            Console.ReadLine();
        }
    }
}
</pre>