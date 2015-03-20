<h1>Delete</h1>
<br />
<h2>Описание:</h2><hr />
<pre class="brush: csharp;">
bool Delete ( string table, List&lt;string&gt; where = null] )
</pre>
Удаляет данные в Базе данных по указанному критерию<br />
<br />
<h2>Список параметров</h2><hr />
<br />
<h3 class="perem">table</h3><span class="paragraph">Название таблицы в Базе Данных</span>
<h3 class="perem">where</h3><span class="paragraph"><font color="red"><b>Не обязательно к заполнению</b></font></span><br/><span class="paragraph">Переменная в которой хранятся подготовленные <a href="index.php?page=prepare-where">условия</a> выбора</span>
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
            List&lt;string&gt; wher = Test.ReturnWhere("test", 11);
            bool vals = Test.Delete("test", wher);
            if(vals) {
                Console.WriteLine("Выбранные данные в таблице test успешно удаленны");
            } else {
                Console.WriteLine("При попытке удалить выбранные данные в таблице test произошла поломка. Обратитесь в файл-лог за дополнительной информацией.");
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
            Test.PrepareWhere("test", 11);
            bool vals = Test.Delete("test");
            if(vals) {
                Console.WriteLine("Выбранные данные в таблице test успешно удаленны");
            } else {
                Console.WriteLine("При попытке удалить выбранные данные в таблице test произошла поломка. Обратитесь в файл-лог за дополнительной информацией.");
            }
            Console.ReadLine();
        }
    }
}
</pre>