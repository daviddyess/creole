<?php
/*
 *  $Id: MySQLPreparedStatement.php,v 1.7 2005/12/10 13:46:55 hlellelid Exp $
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the LGPL. For more information please see
 * <http://creole.phpdb.org>.
 */

\clay\lib('creole/PreparedStatement');//require_once 'lib/creole/PreparedStatement.php';
\clay\lib('creole/common/PreparedStatementCommon');//require_once 'lib/creole/common/PreparedStatementCommon.php';

/**
 * MySQL subclass for prepared statements.
 *
 * @author    Hans Lellelid <hans@xmpl.org>
 * @version   $Revision: 1.7 $
 * @package   creole.drivers.mysql
 */
class MySQLPreparedStatement extends PreparedStatementCommon implements PreparedStatement {

    /**
     * Quotes string using native mysql function (mysql_real_escape_string()).
     * @param string $str
     * @return string
     */
    protected function escape($str)
    {
        return mysql_real_escape_string($str, $this->conn->getResource());
    }

}
