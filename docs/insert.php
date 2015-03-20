<h1>Insert</h1>
<br />
<h2>Описание:</h2><hr />
<pre class="brush: csharp;">
bool Insert ( string table, Dictionary&lt;string, List&lt;string&gt;&gt; cols = null )
</pre>
Возвращает количество записей из Базы данных<br />
<br />
<h2>Список параметров</h2><hr />
<br />
<h3 class="perem">table</h3><span class="paragraph">Название таблицы в Базе Данных</span>
<h3 class="perem">cols</h3><span class="paragraph"><font color="red"><b>Не обязательно к заполнению</b></font></span><br/><span class="paragraph">Переменная в которой хранятся подготовленные к <a href="index.php?page=prepare-insert">добавлению</a> данные</span>
<br />
<h2>Примеры:</h2><hr />
<pre class="brush: csharp;">
using KilleR.MySqli;

namespace ConsoleApplication1
{
    class Program
    {
        static void Main(string[] args)
        {
            MySqli Test = new MySqli("127.0.0.1", "root", "", "mysql");
            Dictionary&lt;string, List&lt;string&gt;&gt; cols = Test.ReturnInsert("test");
            bool vals = Test.Insert("test", cols);
            if(vals) {
                Console.WriteLine("Данные в таблицу test успешно добавленны");
            } else {
                Console.WriteLine("При попытке добавить данные в таблицу test произошла поломка. Обратитесь в файл-лог за дополнительной информацией.");
            }
            Console.ReadLine();
        }
    }
}
</pre>
<hr />
<pre class="brush: csharp;">
using KilleR.MySqli;

namespace ConsoleApplication1
{
    class Program
    {
        static void Main(string[] args)
        {
            MySqli Test = new MySqli("127.0.0.1", "root", "", "mysql");
            Test.PrepareInsert("test");
            bool vals = Test.Insert("test");
            if(vals) {
                Console.WriteLine("Данные в таблицу test успешно добавленны");
            } else {
                Console.WriteLine("При попытке добавить данные в таблицу test произошла поломка. Обратитесь в файл-лог за дополнительной информацией.");
            }
            Console.ReadLine();
        }
    }
}
</pre>