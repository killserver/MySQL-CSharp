<h1>Update_If_Exists</h1>
<br />
<h2>Описание:</h2><hr />
<pre class="brush: csharp;">
bool Update_If_Exists ( string table, [Dictionary&lt;string, List&lt;string&gt;&gt; cols = null, List<string> update] )
</pre>
Добавляет данные в Базу данных возвращая только результат выполнения true - если обновление произошло успешно и false - если что-то пошло не так.<br />
<br />
Главным отличием от <a href="index.php?page=update">Update</a> и <a href="index.php?page=insert">Insert</a> является то, что если запись в Базе Данных уже будет существовать, то вместо ошибки - будет выполненно обновление данных в уже существующей записи.<br />
<font color="red"><b><u>Примечание</u></b></font><br />
Поле должно иметь ключ уникальности. За дополнительной информацией обращаемся к <a href="http://dev.mysql.com/doc/refman/5.1/en/constraint-primary-key.html" target="_blank">документации по-клчам уникальности</a>.
<br />
<h2>Список параметров</h2><hr />
<br />
<h3 class="perem">table</h3><span class="paragraph">Название таблицы в Базе Данных</span>
<h3 class="perem">cols</h3><span class="paragraph"><font color="red"><b>Не обязательно к заполнению</b></font></span><br/><span class="paragraph">Переменная <a href="https://msdn.microsoft.com/ru-ru/library/xfhwa508%28v=vs.110%29.aspx" target="_blank">ассоциативного массива</a> в которой хранятся подготовленные к <a href="index.php?page=prepare-insert">добавлению</a> данные</span>
<h3 class="perem">where</h3><span class="paragraph"><font color="red"><b>Не обязательно к заполнению</b></font></span><br/><span class="paragraph">Переменная в которой хранятся подготовленные к <a href="index.php?page=prepare-update">обновлению</a> данные</span>
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
            Test.PrepareInsert("test", 11);
            Dictionary&lt;string, List&lt;string&gt;&gt; cols = Test.PrepareInsert("test");
            List&lt;string&gt; wher = Test.ReturnUpdate("test", 11);
            bool view = Test.Update_If_Exists("test", cols, wher);
            if(view) {
                Console.WriteLine("Данные в Базе данных успешно добавленны");
            } else {
                Console.WriteLine("При обновлении данных в Базе Данных произошла поломка. За дополнительной информацией - обратитесь в файл-лог.");
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
            Test.PrepareUpdate("test", 11);
            Test.PrepareUpdate("tests", "test");
            List&lt;string&gt; wher = Test.ReturnWhere("test", 11);
            bool view = Test.Update("test");
            if(view) {
                Console.WriteLine("Данные в Базе данных успешно добавленны");
            } else {
                Console.WriteLine("При обновлении данных в Базе Данных произошла поломка. За дополнительной информацией - обратитесь в файл-лог.");
            }
            Console.ReadLine();
        }
    }
}
</pre>